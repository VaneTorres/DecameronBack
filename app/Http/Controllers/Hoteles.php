<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Http\Requests\HotelRequest;
use App\Repositories\HotelRepository;
use App\Repositories\HabitacionRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Hoteles extends Controller
{
    public function index(HotelRepository $hotelRepository)
    {
        /* Obtiene todos los hoteles y les agrega el nombre de la ciudad */
        $hoteles = $hotelRepository->all();
        foreach ($hoteles as $key => $value) {
            $hoteles[$key]->ciudad = $value->ciudades->nombre;
        }
        return response()->json(['success' => true, 'hoteles' => $hoteles]);
    }
    public function show($id, HotelRepository $hotelRepository)
    {
        /* Obtiene un hotel por su id y le agrega el nombre de la ciudad */
        $hoteles= $hotelRepository->find($id);
        return response()->json(['success' => true, 'hoteles'=>$hoteles]);
    }
    public function store(HotelRequest $request, HotelRepository $hotelRepository, HabitacionRepository $habitacionRepository)
    {
        /* Inicia transacción para guardar el hotel y sus habitaciones */
        DB::beginTransaction();
        try {
            /* Guarda el hotel */
            $hotel=$hotelRepository->create($request->all());
            /* Guarda las habitaciones */
            foreach ($request->habitaciones as $key => $value) {
                $habitacionRepository->create([
                    'hotel_id' => $hotel->id,
                    'acomodacion_id' => $value['acomodacion_id'],
                    'tipo_habitacion_id' => $value['tipo_habitacion_id'],
                    'cantidad_habitaciones' => $value['cantidad_habitaciones'],
                ]);
            }
            /* Confirma la transacción */
            DB::commit();
            return response()->json(['success' => true, 'message' => 'Hotel registrado correctamente']);
        } catch(\Exception $e) {
            /* Si hay un error, deshace la transacción */
            DB::rollback();
            return response()->json(['success' => false, 'message' => 'Error al registrar el hotel'], 500);
        }
    }
    public function update(HotelRepository $hotelRepository, HabitacionRepository $habitacionRepository, $id, Request $request)
    {

        $hotel = $hotelRepository->update($request->all(), $id);
        /* Guarda las habitaciones */
        foreach ($request->habitaciones as $key => $value) {
            $habitacionRepository->create([
                'hotel_id' => $hotel->id,
                'acomodacion_id' => $value['acomodacion_id'],
                'tipo_habitacion_id' => $value['tipo_habitacion_id'],
                'cantidad_habitaciones' => $value['cantidad_habitaciones'],
            ]);
        }
        return response()->json(['success' => true, 'message' => 'Hotel actualizado correctamente']);

    }
    public function destroy($id, HotelRepository $hotelRepository, HabitacionRepository $habitacionRepository)
    {
        /* Inicia transacción para eliminar el hotel y sus habitaciones */
        DB::beginTransaction();
        try {
            /* Elimina las habitaciones */
            $habitacion=$habitacionRepository->delete($id);
            /* Elimina el hotel */
            $hotel=$hotelRepository->delete($id);
            /* Confirma la transacción */
            DB::commit();
            return response()->json(['success' => true, 'message' => 'Hotel eliminado correctamente']);
        } catch(\Exception $e) {
            /* Si hay un error, deshace la transacción */
            DB::rollback();
            return response()->json(['success' => false, 'message' => 'Error al eliminar el hotel'], 500);
        }
    }
}

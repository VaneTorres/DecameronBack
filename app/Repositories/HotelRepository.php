<?php

namespace App\Repositories;

use App\Models\Hoteles;

class HotelRepository
{
    public function all()
    {
        /* Obtiene todos los hoteles y les agrega el nombre de la ciudad */
        return Hoteles::with('ciudades:id,nombre')->get();
    }
    public function find($id)
    {
        /* Obtiene un hotel por su id,  le agrega el nombre de la ciudad y las habitaciones*/
        return Hoteles::where('id', $id)
        ->with('ciudades:id,nombre', 'habitaciones.acomodaciones_tipos.tipos_habitaciones:id,nombre', 'habitaciones.acomodaciones_tipos.acomodaciones:id,nombre')
        ->first();

    }
    public function create($data)
    {
        /* Crea un hotel */
        $hoteles = new Hoteles();
        $hoteles->nit= $data['nit'];
        $hoteles->nombre = $data['nombre'];
        $hoteles->ciudad_id = $data['ciudad_id'];
        $hoteles->direccion = $data['direccion'];
        $hoteles->numero_habitaciones = $data['numero_habitaciones'];
        $hoteles->save();
        return  $hoteles;
    }
    public function update($data, $id)
    {
        /* Edita el hotel */
        $hoteles = Hoteles::find($id);
        $hoteles->nit= $data['nit'];
        $hoteles->nombre = $data['nombre'];
        $hoteles->ciudad_id = $data['ciudad_id'];
        $hoteles->direccion = $data['direccion'];
        $hoteles->numero_habitaciones = $data['numero_habitaciones'];
        $hoteles->update();
        return $hoteles;

    }
    public function delete($id)
    {
        /* Elimina el hotel */
        return Hoteles::find($id)->delete();
    }
}

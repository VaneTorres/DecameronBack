<?php

namespace App\Repositories;

use App\Models\Habitaciones;
use App\Models\Acomodaciones_Tipos;

class HabitacionRepository
{
    public function create($data)
    {
        $acomodaciones_tipos_id= Acomodaciones_Tipos::where('acomodacion_id', $data['acomodacion_id'])
        ->where('tipo_habitacion_id', $data['tipo_habitacion_id'])->first();
        /* Crea una habitación */
        $habitacion= Habitaciones::where('hotel_id', $data['hotel_id'])->where('acomodaciones_tipos_id', $acomodaciones_tipos_id->id)->first();
        /* Si no existe una habitación con el mismo tipo de acomodación y tipo de habitación, la crea */
        if (!$habitacion) {
            $habitaciones = new Habitaciones();
            $habitaciones->hotel_id = $data['hotel_id'];
            $habitaciones->acomodaciones_tipos_id = $acomodaciones_tipos_id->id;
            $habitaciones->cantidad_habitaciones = $data['cantidad_habitaciones'];
            $habitaciones->save();
        }
        return  $habitaciones;
    }
    public function update($data, $id)
    {
        return Habitaciones::find($id)->update($data);
    }
    public function delete($id)
    {
        return Habitaciones::where('hotel_id', $id)->delete();
    }
}

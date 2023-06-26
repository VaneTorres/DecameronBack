<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Parametricas extends Controller
{
    public function ciudades()
    {
        /* Obtiene todas las ciudades */
        $ciudades = \App\Models\Ciudades::select('id', 'nombre')->get();
        return response()->json($ciudades);
    }
    public function acomodaciones($id_tipo)
    {
        /* Obtiene las acomodaciones de un tipo de habitación */
        $acomodaciones = \App\Models\Acomodaciones_Tipos::where('tipo_habitacion_id', $id_tipo)->with('acomodaciones')->get()->pluck('acomodaciones');
        return response()->json($acomodaciones);
    }
    public function tipo_habitaciones()
    {
        /* Obtiene todos los tipos de habitaciones */
        $tipo_habitaciones=\App\Models\Tipos_Habitaciones::all();
        return response()->json($tipo_habitaciones);
    }
}

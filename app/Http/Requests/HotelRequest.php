<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HotelRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'nit' => 'required|unique:hoteles,nit',
            'nombre' => 'required',
            'ciudad_id' => 'required',
            'direccion' => 'required',
            'numero_habitaciones' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'nit.required' => 'El campo nit es requerido',
            'nit.unique' => 'El campo nit ya existe',
            'nombre.required' => 'El campo nombre es requerido',
            'ciudad_id.required' => 'El campo ciudad es requerido',
            'direccion.required' => 'El campo direccion es requerido',
            'numero_habitaciones.required' => 'El campo numero de habitaciones es requerido',
        ];
    }
}

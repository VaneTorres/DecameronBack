<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acomodaciones_Tipos extends Model
{
    use HasFactory;
    protected $table = 'acomodaciones_tipos';
    public $timestamps = false;
    public function acomodaciones()
    {
        return $this->belongsTo(Acomodaciones::class, 'acomodacion_id', 'id');
    }
    public function tipos_habitaciones()
    {
        return $this->belongsTo(Tipos_Habitaciones::class, 'tipo_habitacion_id', 'id');
    }
    public function habitaciones()
    {
        return $this->hasMany(Habitaciones::class, 'acomodaciones_tipos_id', 'id');
    }

}

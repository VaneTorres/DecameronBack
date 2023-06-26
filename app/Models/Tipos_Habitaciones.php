<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipos_Habitaciones extends Model
{
    use HasFactory;
    protected $table = 'tipos_habitaciones';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nombre',
    ];
    public function acomodaciones_tipos()
    {
        return $this->hasMany(Acomodaciones_Tipos::class, 'tipo_habitacion_id', 'id');
    }
}

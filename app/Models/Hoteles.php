<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hoteles extends Model
{
    use HasFactory;
    protected $table = 'hoteles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nombre_hotel',
        'ciudad_id',
        'direccion',
        'numero_habitaciones',
    ];
    public function ciudades()
    {
        return $this->belongsTo(Ciudades::class, 'ciudad_id', 'id');
    }
    public function habitaciones()
    {
        return $this->hasMany(Habitaciones::class, 'hotel_id','id');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitaciones extends Model
{
    use HasFactory;
    protected $table = 'habitaciones';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'hotel_id',
        'acomodaciones_tipos_id',
        'cantidad_habitaciones',
    ];
    public function hoteles()
    {
        return $this->belongsTo(Hoteles::class, 'hotel_id', 'id');
    }
    public function acomodaciones_tipos()
    {
        return $this->belongsTo(Acomodaciones_Tipos::class, 'acomodaciones_tipos_id', 'id');
    }


}

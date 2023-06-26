<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acomodaciones extends Model
{
    use HasFactory;
    protected $table = 'acomodaciones';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nombre',
    ];
    public function acomodaciones_tipos()
    {
        return $this->hasMany(Acomodaciones_Tipos::class, 'acomodacion_id', 'id');
    }
}

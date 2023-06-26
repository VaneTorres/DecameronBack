<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudades extends Model
{
    use HasFactory;
    protected $table = 'ciudades';
    public function hoteles()
    {
        return $this->hasMany(Hoteles::class, 'id', 'ciudad_id');
    }
}

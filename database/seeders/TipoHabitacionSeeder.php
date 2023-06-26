<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TipoHabitacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tipos_habitaciones')->insert(array(
            'nombre' => 'Estándar',
            'created_at' => now(),
            'updated_at' => now()
        ));
        \DB::table('tipos_habitaciones')->insert(array(
            'nombre' => 'Junior',
            'created_at' => now(),
            'updated_at' => now()
        ));
        \DB::table('tipos_habitaciones')->insert(array(
            'nombre' => 'Suite',
            'created_at' => now(),
            'updated_at' => now()
        ));
    }
}

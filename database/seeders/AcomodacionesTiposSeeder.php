<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AcomodacionesTiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('acomodaciones_tipos')->insert(array(
            'tipo_habitacion_id' => 1,
            'acomodacion_id' => 1,
        ));
        \DB::table('acomodaciones_tipos')->insert(array(
            'tipo_habitacion_id' => 1,
            'acomodacion_id' => 2,
        ));
        \DB::table('acomodaciones_tipos')->insert(array(
            'tipo_habitacion_id' => 2,
            'acomodacion_id' => 3,
        ));
        \DB::table('acomodaciones_tipos')->insert(array(
            'tipo_habitacion_id' => 2,
            'acomodacion_id' => 4,
        ));
        \DB::table('acomodaciones_tipos')->insert(array(
            'tipo_habitacion_id' => 3,
            'acomodacion_id' => 1,
        ));
        \DB::table('acomodaciones_tipos')->insert(array(
            'tipo_habitacion_id' => 3,
            'acomodacion_id' => 2,
        ));
        \DB::table('acomodaciones_tipos')->insert(array(
            'tipo_habitacion_id' => 3,
            'acomodacion_id' => 3,
        ));
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataJson = file_get_contents(public_path("data/ciudadesColombia.json"));
        $ciudades = json_decode($dataJson);
        foreach ($ciudades as $ciudad) {
            \DB::table('ciudades')->insert(array(
                'nombre' => $ciudad->label,
                'created_at' => now(),
                'updated_at' => now()
            ));
        }

    }
}

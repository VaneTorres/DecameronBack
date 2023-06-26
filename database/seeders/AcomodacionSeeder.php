<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AcomodacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('acomodaciones')->insert(array(
            'nombre' => 'Sencilla',
            'created_at' => now(),
            'updated_at' => now()
        ));
        \DB::table('acomodaciones')->insert(array(
            'nombre' => 'Doble',
            'created_at' => now(),
            'updated_at' => now()
        ));
        \DB::table('acomodaciones')->insert(array(
            'nombre' => 'Triple',
            'created_at' => now(),
            'updated_at' => now()
        ));
        \DB::table('acomodaciones')->insert(array(
            'nombre' => 'Cuádruple',
            'created_at' => now(),
            'updated_at' => now()
        ));
    }
}

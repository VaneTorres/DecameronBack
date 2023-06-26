<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this -> call(CiudadSeeder::class);
        $this -> call(TipoHabitacionSeeder::class);
        $this -> call(AcomodacionSeeder::class);
        $this -> call(AcomodacionesTiposSeeder::class);

        // \App\Models\User::factory(10)->create();
    }
}

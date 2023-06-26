<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcomodacionesTiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acomodaciones_tipos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_habitacion_id')->constrained('tipos_habitaciones');
            $table->foreignId('acomodacion_id')->constrained('acomodaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acomodaciones__tipos');
    }
}

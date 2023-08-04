<?php
// database/migrations/2023_07_24_000005_create_empleados_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('telefono');
            $table->string('correo_electronico');
            $table->unsignedBigInteger('id_estacion_trabajo')->nullable(); // Columna para la referencia a la estación de trabajo
            $table->foreign('id_estacion_trabajo')->references('id')->on('estaciones_trabajo');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}

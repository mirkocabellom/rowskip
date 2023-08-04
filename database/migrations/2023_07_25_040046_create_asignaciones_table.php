<?php
// database/migrations/2023_07_24_000006_create_asignaciones_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignacionesTable extends Migration
{
    public function up()
    {
        Schema::create('asignaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_empleado');
            $table->unsignedBigInteger('id_fila');
            $table->dateTime('fecha_hora_asignacion');
            $table->string('estado_asignacion')->default('en_curso');
            $table->foreign('id_empleado')->references('id')->on('empleados');
            $table->foreign('id_fila')->references('id')->on('filas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('asignaciones');
    }
}

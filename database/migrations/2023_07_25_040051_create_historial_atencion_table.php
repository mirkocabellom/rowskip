<?php
// database/migrations/2023_07_24_000007_create_historial_atencion_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialAtencionTable extends Migration
{
    public function up()
    {
        Schema::create('historial_atencion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_fila');
            $table->unsignedBigInteger('id_empleado');
            $table->dateTime('fecha_hora_inicio_atencion');
            $table->dateTime('fecha_hora_fin_atencion');
            $table->text('detalles_atencion')->nullable();
            $table->text('comentarios_atencion')->nullable();
            $table->foreign('id_fila')->references('id')->on('filas');
            $table->foreign('id_empleado')->references('id')->on('empleados');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('historial_atencion');
    }
}

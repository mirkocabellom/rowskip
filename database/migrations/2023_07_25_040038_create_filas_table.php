<?php
// database/migrations/2023_07_24_000004_create_filas_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilasTable extends Migration
{
    public function up()
    {
        Schema::create('filas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_servicio');
            $table->integer('numero_turno');
            $table->string('estado')->default('en_espera');
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->foreign('id_servicio')->references('id')->on('servicios');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('filas');
    }
}

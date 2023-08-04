<?php
// database/migrations/2023_07_24_000002_create_categorias_servicio_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasServicioTable extends Migration
{
    public function up()
    {
        Schema::create('categorias_servicio', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('categorias_servicio');
    }
}

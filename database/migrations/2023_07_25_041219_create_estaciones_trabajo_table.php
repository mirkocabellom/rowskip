<?php

// database/migrations/2023_07_24_000008_create_estaciones_trabajo_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstacionesTrabajoTable extends Migration
{
    public function up()
    {
        Schema::create('estaciones_trabajo', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('ubicacion');
            $table->boolean('ocupada')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('estaciones_trabajo');
    }
}

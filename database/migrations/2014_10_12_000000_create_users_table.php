<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('usu_cod');
            $table->string('usu_rut');
            $table->string('usu_nombre');
            $table->string('usu_apellido');
            $table->string('email',100)->unique();
            $table->timestamp('email_verified_at',100)->nullable();
            $table->string('password');
            $table->integer('rol');
            $table->integer('est_cod');
            $table->integer('estado');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};

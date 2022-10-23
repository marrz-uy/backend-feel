<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('puntosinteres', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Departamento')->nullable();
            $table->string('Ciudad')->nullable();
            $table->string('Direccion')->nullable();
            $table->string('HoraDeApertura')->nullable();
            $table->string('HoraDeCierre')->nullable();
            $table->string('Facebook')->nullable();
            $table->string('Instagram')->nullable();
            $table->string('Descripcion')->nullable();
            $table->string('Imagen')->nullable();
            $table->integer('Latitud')->nullable();
            $table->integer('Longitud')->nullable();
            /* $table->decimal('Latitud', $precision = 7, $scale = 5)->nullable();
            $table->decimal('Longitud', $precision = 7, $scale = 5)->nullable(); */
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('puntos_interes');
    }
};

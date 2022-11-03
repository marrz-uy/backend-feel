<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserprofileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userprofile', function (Blueprint $table) {
            $table->charset   = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->id();
            $table->unsignedBigInteger('user_id')->unique();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('nacionalidad')->nullable();
            $table->date('f_nacimiento')->nullable();
            $table->string('alojamiento')->nullable();
            $table->string('gastronomia')->nullable();
            $table->string('espectaculos')->nullable();
            $table->string('actividadesAlAirelibre')->nullable();
            $table->string('actividadesNocturnas')->nullable();
            $table->string('transporte')->nullable();
            $table->string('actividadesInfantiles')->nullable();
            $table->string('serviciosEsenciales')->nullable();
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
        Schema::dropIfExists('userprofile');
    }
}

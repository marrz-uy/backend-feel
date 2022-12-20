<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_items', function (Blueprint $table) {
            $table->unsignedBigInteger('tourId')
                ->references('id')
                ->on('tour_armados')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('puntoInteresId')
                ->references('id')
                ->on('puntosinteres');
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
        Schema::dropIfExists('tour_items');
    }
}

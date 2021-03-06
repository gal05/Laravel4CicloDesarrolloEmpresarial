<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaCanciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canciones', function (Blueprint $table) {
            $table->engine='InnoDB'; 
            $table->increments('id');
            $table->string('titulo');
            $table->string('descripcion');
            $table->smallInteger('anio');
            $table->string('imagen');
            $table->integer('albumnes_id')->unsigned();
            $table->foreign('albumnes_id')
                  ->references('id')->on('albumnes');  
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
        Schema::dropIfExists('canciones');
    }
}

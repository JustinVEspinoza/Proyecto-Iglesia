<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidad', function (Blueprint $table) {
            $table->bigIncrements('idUnidad');
            $table->string('nombreUnidad');
            $table->tinyInteger('puntajeMaximo');
             $table->date('fechaCreacionUnidad');
            $table->bigInteger('idEstudio')->unsigned();            
            $table->foreign('idEstudio')->references('idEstudio')->on('estudio');
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
        Schema::dropIfExists('unidad');
    }
}

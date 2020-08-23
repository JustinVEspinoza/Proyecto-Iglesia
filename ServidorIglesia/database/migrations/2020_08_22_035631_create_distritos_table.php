<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distritos', function (Blueprint $table) {
            $table->bigIncrements('idDistrito');
             $table->string('nombreDistrito');
            $table->string('ubicacion');
            $table->string('usuarioDistrito');
            $table->string('contraDistrito');
            $table->bigInteger('idRegion')->unsigned();            
            $table->foreign('idRegion')->references('idRegion')->on('regions');
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
        Schema::dropIfExists('distritos');
    }
}

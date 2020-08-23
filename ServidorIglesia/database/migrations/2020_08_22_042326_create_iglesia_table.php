<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIglesiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iglesia', function (Blueprint $table) {
            $table->bigIncrements('idIglesia');
            $table->string('nombreIglesia');
            $table->string('ubicacion');
            $table->Integer('cantidadPersona');
            $table->string('ciudad');
            $table->string('usuarioIglesia');
            $table->string('contraIglesia');
            $table->bigInteger('idDistrito')->unsigned();            
            $table->foreign('idDistrito')->references('idDistrito')->on('distritos');
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
        Schema::dropIfExists('iglesia');
    }
}

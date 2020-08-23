<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructor', function (Blueprint $table) {
           $table->bigIncrements('DNI');
            $table->string('nombre');
            $table->tinyInteger('edad');
            $table->string('password');
            $table->string('celular');
            $table->smallInteger('numeroParejasMisioneras');
            $table->boolean('misionerDigital');
            $table->bigInteger('idIglesia')->unsigned(); 
            $table->bigInteger('idGrupo')->unsigned();            
            $table->foreign('idIglesia')->references('idIglesia')->on('iglesia');           
            $table->foreign('idGrupo')->references('idGrupo')->on('grupo');
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
        Schema::dropIfExists('instructor');
    }
}

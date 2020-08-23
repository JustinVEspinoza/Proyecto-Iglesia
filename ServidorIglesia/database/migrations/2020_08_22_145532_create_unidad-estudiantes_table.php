<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidad_estudiantes', function (Blueprint $table) {
            $table->BigInteger('idUnidad')->unsigned();          
            $table->BigInteger('idEstudiante')->unsigned();      
            $table->tinyInteger('puntajeEstudiante');
            $table->date('fecha_Inicio');
            $table->foreign('idEstudiante')->references('idEstudiante')->on('estudiante');
            $table->foreign('idUnidad')->references('idUnidad')->on('unidad');
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
        Schema::dropIfExists('unidad_estudiantes');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class unidad_estudiante extends Model{

    protected $primaryKey = 'idUnidad';
    
    protected $fillable = 
    ['idUnidad', 
    'idEstudiante', 
    'puntajeEstudiante',
    'fecha_Inicio'];
}

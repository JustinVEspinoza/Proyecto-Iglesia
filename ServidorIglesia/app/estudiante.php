<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estudiante extends Model
{
    protected $primaryKey = 'idEstudiante';
    
    protected $fillable = 
    ['idEstudiante', 
    'nombre', 
    'apellidos',
    'idMetodoCompartirPalabra',
    'idEstadoCivil',
    'edad'];
}

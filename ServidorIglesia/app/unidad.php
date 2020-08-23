<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class unidad extends Model
{
    protected $primaryKey = 'idUnidad';
   protected $fillable = ['idUnidad','nombreUnidad', 'puntajeMaximo','fechaCreacionUnidad'];
}
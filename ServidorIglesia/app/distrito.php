<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class distrito extends Model
{
   
	protected $primaryKey = 'idDistrito';
   protected $fillable = ['idDistrito','nombreDistrito', 'ubicacion', 'usuarioDistrito','contraDistrito'];
   }

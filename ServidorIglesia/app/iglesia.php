<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class iglesia extends Model
{
    protected $primaryKey = 'idIglesia';
   protected $fillable = ['idIglesia','nombreIglesia', 'usuarioIglesia', 'contraIglesia','ciudad','cantidadPersona'];
}

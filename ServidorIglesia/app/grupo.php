<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grupo extends Model
{
    protected $primaryKey = 'idGrupo';
   protected $fillable = ['idGrupo','nombreGrupo' ];
}

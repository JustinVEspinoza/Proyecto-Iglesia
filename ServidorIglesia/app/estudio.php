<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estudio extends Model
{
    protected $primaryKey = 'idEstudio';
   protected $fillable = ['idEstudio','nombreEstudio', 'fechaCreacionEstudio'];
}

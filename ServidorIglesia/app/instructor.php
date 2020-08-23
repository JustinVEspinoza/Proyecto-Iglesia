<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class instructor extends Model
{
    protected $primaryKey = 'DNI';
   protected $fillable = ['DNI','nombre', 'edad','password','celular','numeroParejasMisioneras','misionerDigital'];
}

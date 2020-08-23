<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class region extends Model
{
	protected $primaryKey = 'idRegion';
   protected $fillable = ['idRegion','nombre', 'usuarioRegion', 'contraRegion'];
}

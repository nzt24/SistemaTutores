<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno_Materia extends Model
{
  protected $table = 'alumno_materia';
  protected $primaryKey = 'id';
  public $timestamps = false;
}

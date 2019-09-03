<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
  protected $table = 'materia';
  protected $primaryKey = 'id_materia';
  public $timestamps = false;
  protected $keyType = 'string';
}

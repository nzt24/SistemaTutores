<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
  protected $table = 'licenciatura';
  protected $primaryKey = 'id_licenciatura';
  public $timestamps = false;
}

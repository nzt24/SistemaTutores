<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{

  protected $table = 'tutor';
  protected $primaryKey = 'id_tutor';
  public $timestamps = false;
}

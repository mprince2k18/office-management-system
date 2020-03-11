<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApiData extends Model
{

  protected $fillable = [
    'name',
    'email',
    'phone',
  ];
    //END
}

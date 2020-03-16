<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Designation extends Model
{
  use LogsActivity;

  protected $fillable = [
    'name',
  ];
  //END
}

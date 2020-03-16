<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Duties extends Model
{
  use LogsActivity;

  protected $fillable = [
    'name',
  ];
  //END
}

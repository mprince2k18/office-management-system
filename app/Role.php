<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Role extends Model
{

  use LogsActivity;

  protected $fillable = [
    'role_name',
    'role_details',
  ];

    //END
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Course extends Model
{
    use LogsActivity;

    protected $fillable = [
      'course_name',
      'course_fee',
      'course_outline',
      'course_thumb',
    ];

    //END
}

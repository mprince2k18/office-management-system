<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Batch extends Model
{
  use LogsActivity;

  protected $fillable = [
    'batch_no',
    'teacher',
  ];

  public function relationBetweenTeacher()
  {
    return $this->hasOne('App\Teacher','id','teacher');
  }


  // END

}

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

  // relationBetweenTeacher
  public function relationBetweenTeacher()
  {
    return $this->hasOne('App\Teacher','id','teacher');
  }

  // relationBetweenEnroll
  public function relationBetweenEnroll()
  {
    return $this->hasOne('App\Enroll','batch_no','id');
  }


  // END

}

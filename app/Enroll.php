<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Enroll extends Model
{
    use LogsActivity;

    protected $fillable = [
      'student_name',
      'course_name',
      'course_fee',
      'course_discount',
      'student_roll',
      'batch_no',
      'sum',
    ];

    public function relationBetweenCourse()
    {
      return $this->hasOne('App\Course','id','course_name');
    }

    public function relationBetweenStudent()
    {
      return $this->hasOne('App\Student','id','student_name');
    }

    public function relationBetweenBatch()
    {
      return $this->hasOne('App\Batch','id','batch_no');
    }

    //END
}

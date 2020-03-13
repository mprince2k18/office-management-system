<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Seminar extends Model
{
  use LogsActivity;

  protected $fillable = [
    'name',
    'phone',
    'email',
    'adress',
    'seminar_date',
    'seminar_topic',
    'seminar_representer',
  ];

  public function relationBetweenCourse()
  {
    return $this->hasOne('App\Course','id','seminar_topic');
  }
  //END
}

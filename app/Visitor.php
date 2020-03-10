<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Visitor extends Model
{
    use LogsActivity;

    protected $fillable = [
      'name',
      'email',
      'phone',
      'talked',
    ];

    public function relationBetweenCourse()
    {
      return $this->hasOne('App\Course','id','talked');
    }
    //END
}

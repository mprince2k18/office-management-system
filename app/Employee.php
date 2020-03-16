<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Employee extends Model
{
    use LogsActivity;

    protected $fillable = [
      'name',
      'phone',
      'address',
      'photo',
      'designation',
      'salary',
      'duties',
    ];


    function relationBetweenDesignation()
    {
      return $this->hasOne('App\Designation','id','designation');
    }

    function relationBetweenDuty()
    {
      return $this->hasOne('App\Duties','id','duties');
    }

    //END

}

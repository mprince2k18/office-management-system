<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;


class Teacher extends Model
{
    use LogsActivity;

    protected $fillable = [
      'name',
      'father_name',
      'mother_name',
      'email',
      'gender',
      'nationality',
      'blood_group',
      'occupation',
      'dob',
      'present_address',
      'permanent_address',
      'marketplace',
      'phone',
      'password',
      'avatar',
      'ssc_inst',
      'ssc_board',
      'ssc_subject',
      'ssc_passing',
      'hsc_inst',
      'hsc_board',
      'hsc_subject',
      'hsc_passing',
      'grad_inst',
      'grad_board',
      'grad_subject',
      'grad_passing',
      'masters_inst',
      'masters_board',
      'masters_subject',
      'masters_passing',
      'assigned_course',
    ];

    //END
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Installment extends Model
{

  use LogsActivity;

    protected $fillable = [
      'enroll_id',
      'student_id',
      'firstInstallment',
      'firstInstallmentDate',
      'secondInstallment',
      'secondInstallmentDate',
      'thirdInstallment',
      'thirdInstallmentDate',
      'fourInstallment',
      'fourInstallmentDate',
      'fiveInstallment',
      'fiveInstallmentDate',
    ];
    //END
}

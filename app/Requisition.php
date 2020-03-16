<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Requisition extends Model
{

  use LogsActivity;

  protected $fillable = [
    'for_whom',
    'buy_from',
    'cost',
    'quantity',
    'transport_fee',
    'payment_source',
    'assigned_person',
    'money_receipt',
    'note',
  ];

  function relationBetweenEmployee()
  {
    return $this->hasOne('App\Employee','id','assigned_person');
  }

    //END
}

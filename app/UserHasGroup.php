<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserHasGroup extends Model
{
  public function groups(){
        return $this->hasMany(Group::class,'id','group_id');
    }
    //END
}

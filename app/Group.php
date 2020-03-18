<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;


class Group extends Model
{

    use LogsActivity;

    protected $table = 'groups';

    public function permissions(){
        return $this->hasMany(GropuHasPermission::class,'group_id','id');
    }

    protected $fillable = [
      'name',
      'description',
      'permission_id',
    ];

    //END
}

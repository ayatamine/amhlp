<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class groups_permissions extends Model
{
    public $fillable=['group_id','permission_id'];
    public function permission(){
        return $this->belongsTo('App\allPermissions');
    }
}

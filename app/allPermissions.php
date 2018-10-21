<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class allPermissions extends Model
{
    public $fillable=['id','parent_id','permission_name','permission_description'];
    public function allPermissions(){
        return $this->hasMany('App\permissions');
    }
    public function getChildren($per_id){
        $children=allPermissions::where('parent_id',$per_id)->get();
        return $children;
    }
} 

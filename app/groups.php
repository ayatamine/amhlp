<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class groups extends Model
{
public $fillable=['id','group_name','assign_type'];
public function user(){
    return $this->hasMany('App\User');

}

}

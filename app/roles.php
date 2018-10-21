<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    public $fillable=['id','role_name','user_id'];
    public function user(){
        return $this->belongsTo('App\User');
    }
}

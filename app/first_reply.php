<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class first_reply extends Model
{
    public $fillable=['ticket_id','period'];
    public function tickets(){
        return $this->hasMany('App\ticket');
    }
}

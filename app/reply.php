<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reply extends Model
{
    public $fillable=['user_id','ticket_id','reply_content','type','name'];
    public function ticket(){
        return $this->belongsTo('App\ticket');
    }
    public function user(){
        return $this->belongsTo('App\user');
    }
}

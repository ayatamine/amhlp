<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    protected $fillable=['article_id','user_id','feed_type'];
    public function user(){
        return $this->belongsTo('App\user');
    }
    public function article(){
        return $this->belongsTo('App\ticket');
    }
}

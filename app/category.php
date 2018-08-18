<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable=['id,category_name'];
    public function ticket(){
        return $this->hasMany('App\ticket');
    }
}

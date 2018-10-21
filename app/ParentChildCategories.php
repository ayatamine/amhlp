<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParentChildCategories extends Model
{
    public $fillable=['order','parent_id','child_id','description'];
    public function category(){
        return $this->belongsTo('App\category','id');
    }
    public function childCategory(){
        return $this->belongsTo('App\childCategory','id');
    }
    
}

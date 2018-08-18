<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
   protected $fillable=['user_id','title','slug','language','details','category_id','sub_category_name'];
   public function category(){
       return $this->belongsTo('App\category');
   }
   public function user(){
       return $this->belongsTo('App\User');
   }

}

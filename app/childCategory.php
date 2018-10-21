<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class childCategory extends Model
{
   public $fillable=['id','child_category_name'];
   
   public function child_article_count($child_cat_name,$cat_id){
    $tickets1 = ticket::where('category_id',$cat_id);
    $tickets2=$tickets1->where('sub_category_name',$child_cat_name)->get()->count();
    return $tickets2;
 }
}

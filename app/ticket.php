<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
   protected $fillable=['user_id','title','slug','language','details','category_id','sub_category_name','status','added_tags','added_categories','publish_state'];
   public function category(){
       return $this->belongsTo('App\category');
   }
   public function user(){
       return $this->belongsTo('App\User');
   }
   public function replies(){
    return $this->hasMany('App\reply');
   }
   public function subCatName($subname){
       return childCategory::where('child_category_name',$subname)->get()->first()->id;
   }
   public function catExist($id,$catId){
   $ticket=ticket::find($id);
   $added_cat_id=explode(',',$ticket->added_categories);
   array_pop($added_cat_id);
   if(in_array($catId,$added_cat_id)){
       return true;
   }
   }
   public function tagExist($id,$tagId){
    $ticket=ticket::find($id);
    $added_tags_id=explode(',',$ticket->added_tags);
    array_pop($added_tags_id);
    if(in_array($tagId,$added_tags_id)){
        return true;
    }
    }
    public function reply_count($ticket_id){
        return reply::where('ticket_id',$ticket_id)->get()->count();
    }
    public function getStatusId($name){
        $id=category::where('category_name',$name)->get()->first()->id;
        if($id !=null){
            return $id;
        }else{
            return 1;
        }
    }
   
   

}

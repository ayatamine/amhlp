<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ticket;
use App\ParentChildCategories;
class category extends Model
{
    protected $fillable=['id','category_name','type','display_name'];
    public function ticket(){
        return $this->hasMany('App\ticket');
    }
    public function get_number_of_ticket($tag_id){
       $tickets= ticket::where('category_id',$tag_id)->get();
       return count($tickets);
    }
    public function article_count($cat_id){
        return ticket::where('category_id',$cat_id)->get()->count();
    }
    public function article_number($cat_id,$type,$cat_name){
        if($type == 'category'){
            return ticket::where('category_id',$cat_id)->get()->count();
        }else{
            return ticket::where('status',$cat_name)->get()->count();
        }
        
    }
    public function child_article_count($child_cat_name,$cat_id){
       $tickets1 = ticket::where('category_id',$cat_id);
       $tickets2=$tickets1->where('sub_category_name',$child_cat_name)->get()->count();
       return $tickets2;
    }
    public function getChilds($id,$child_id){
        $re=false;
        $child_exist=ParentChildCategories::where('parent_id',$id)->orderBy('created_at','desc')->get();
       // dd($child_exist);
       $idis=array();
        foreach($child_exist as $child){
          array_push($idis,$child->child_id);
        }
        if(in_array($child_id,$idis)){
            $re=true;

        }
       
        return $re;
    }
    public function getDescription($child_id,$parent_id){
        $child=ParentChildCategories::where('parent_id',$parent_id)->where('child_id',$child_id)->get()->first();
        return $child->description;
    }
}

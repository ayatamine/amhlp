<?php

namespace App;
use App\MenuItems;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
   public $fillable=['id','name','position'];
   public function menuItems($id){
       $items=menuItems::where('menu_id',$id)->get();
       return $items;
   }
}

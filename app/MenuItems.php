<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItems extends Model
{
    public $fillable=['id','menu_id','label','type','action','condition'];
    public function menus(){
        return $this->belongsTo('App\Menu');
    }
}

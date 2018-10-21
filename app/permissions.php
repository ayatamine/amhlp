<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class permissions extends Model
{
    public $fillable=['id','user_id','permission_id'];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function getPermissions($id){
        return allPermissions::find($id);
    }
    

}

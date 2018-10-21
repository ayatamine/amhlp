<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\ticket;
use App\feedback;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password','avatar','firstname','lastname'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function tickets(){
        return $this->hasMany('App\ticket');
    }
    public function feedback($article_id){
        $user_id=feedback::where('article_id',$article_id)->get()->first();
        if($user_id== null){
            return false;
        }
        else{
            return true;
        }
    }
    public function user_groups($user_id){
        $roles=explode(',',User::find($user_id)->groups_id);
        array_pop($roles);
        $roles_array=[];
        foreach($roles as $role){
            array_push($roles_array,groups::find($role));
        }
        return $roles_array;
    }
    public function user_groups_id($user_id){
        $roles=explode(',',User::find($user_id)->groups_id);
        array_pop($roles);
        $roles_array=[];
        foreach($roles as $role){
            array_push($roles_array,groups::find($role)->id);
        }
        return $roles_array;
    }
   
    public function permissions($id){
        return permissions::where('user_id',$id)->get();
    }
    

}

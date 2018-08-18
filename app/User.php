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
        'username', 'email', 'password',
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
    
}

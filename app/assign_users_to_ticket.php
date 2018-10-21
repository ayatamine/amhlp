<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class assign_users_to_ticket extends Model
{
   public $fillable=['ticket_id','user_id'];
   
}

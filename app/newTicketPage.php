<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newTicketPage extends Model
{
    public $fillable=['id','title','Category_label','Sub_Category_label','Subject_Label','Description_Label','Sidebar_Title','Sidebar_Tips1','Sidebar_Tips1_details','Sidebar_Tips2','Sidebar_Tips2_details','Sidebar_Tips3','Sidebar_Tips3_details','Submit_button'];

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siteSettings extends Model
{
    public $fillable=['site_name','site_url','copyright_img','favicon_icon','logoWhite','into_title','intro_search_placeholder'];
}

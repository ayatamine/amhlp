<?php

use Illuminate\Database\Seeder;

class siteSettings extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\siteSettings::create([
            'id'=>'1',
            'site_name'=>'Poostel',
            'site_url'=>'help.poostel.com',
            'copyright_img'=>'poostel.png',
            'favicon_icon'=>'favicon.ico',
            'logoWhite'=>'poostel.png',
            'into_title'=>'How can we help you?',
            'intro_search_placeholder'=>'Enter your question or keyword here'
        ]);
    }
}

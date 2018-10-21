<?php

use Illuminate\Database\Seeder;

class MenuItemsseder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\MenuItems::create([
           'id'=>'1',
           'label'=>'My Tickets',
           'menu_id'=>'1',
           'type'=>'Route',
           'action'=>'/tickets',
           'condition'=>'auth'
        ]);
        \App\MenuItems::create([
            'id'=>'2',
            'label'=>'Admin Area',
            'menu_id'=>'1',
            'type'=>'Route',
            'action'=>'/admin/reports',
            'condition'=>'admin'
         ]);
         \App\MenuItems::create([
            'id'=>'3',
            'label'=>'Register',
            'menu_id'=>'1',
            'type'=>'Route',
            'action'=>'/register',
            'condition'=>'guest'
         ]);
         \App\MenuItems::create([
            'id'=>'4',
            'label'=>'Login',
            'menu_id'=>'1',
            'type'=>'Route',
            'action'=>'/Login',
            'condition'=>'guest'
         ]);
       
    }
}

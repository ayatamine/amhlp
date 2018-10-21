<?php

use Illuminate\Database\Seeder;

class menuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Menu::create([
             'id' =>  '1' ,
            'name' => 'Header Menu' ,
            'position' => 'header', 
        ]);
    }
}

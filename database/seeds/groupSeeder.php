<?php

use Illuminate\Database\Seeder;

class groupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\groups::create([
           'group_name'=>'customers',
           
        ]);
        \App\groups::create([
           'group_name'=>'agents',
           
        ]);
        \App\groups::create([
           'group_name'=>'guests',
           
        ]); 
    }
}

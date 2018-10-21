<?php

use Illuminate\Database\Seeder;

class permissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

         \App\permissions::create([
             'user_id'=>'1',
             'permission_id'=>'1',

         ]);
         \App\permissions::create([
             'user_id'=>'1',
             'permission_id'=>'2',

         ]);
    }
}

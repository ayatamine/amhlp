<?php

use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\User::create([
        'id'=>'1',
        'username'=>'ahmed',
        'email'=>'ayatir04@gmail.com',
        'password'=>bcrypt('123456'),
        
       ]);
       \App\User::create([
        'id'=>'2',
        'username'=>'amine',
        'email'=>'amine04@gmail.com',
        'password'=>bcrypt('123456'),
        
       ]);
    }
}

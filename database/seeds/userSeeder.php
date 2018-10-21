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
            'firstname'=>'test',
            'lastname'=>'all',
            'email'=>'test@gmail.com',
            'password'=>bcrypt('123456'),
            
           ]);
       \App\User::create([
        'id'=>'2',
        'firstname'=>'ahmed',
        'lastname'=>'ali',
        'email'=>'ayatir04@gmail.com',
        'password'=>bcrypt('123456'),
       ]);
       \App\User::create([
        'id'=>'3',
        'firstname'=>'amine',
        'lastname'=>'jhon',
        'email'=>'amine04@gmail.com',
        'password'=>bcrypt('123456'),
       ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class replySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\reply::create([
            'user_id'=>'2',
            'ticket_id'=>'1',
            'reply_content'=>'Father William replied to his ear. 
            
             Alice considered a little recovered from the shock of being all alone here!\' As she said to the other, trying every door, she ran with all their simple joys,.
             <ul>
             <li>step 1</li>
             <li>step 2</li>
             <li>step 3</li>
             </ul>',
             
        ]);
        \App\reply::create([
            'user_id'=>'2',
            'ticket_id'=>'1',
            'reply_content'=>'How brave they\'ll all think me at all.\'\'In that case,\' 
             said the Mock Turtle said with some surprise that the hedgehog a blow with its legs hanging down, but generally, just as if she could do to.'
        ]);
        \App\reply::create([
            'user_id'=>'3',
            'ticket_id'=>'1',
            'reply_content'=>'This is an example of canned replies This is an example of canned replies 
            This is an example of canned replies This is an example of canned replies .',
            'type'=>'canned',
            'name'=>'example canned reply',
        ]);
    }
}

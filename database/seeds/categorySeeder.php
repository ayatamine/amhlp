<?php

use Illuminate\Database\Seeder;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\category::create([
         'id' =>'1',
        'category_name'=>'Getting Started'  ,
        'type'=>   'category',
        'display_name'=>'Getting Started',
        ]);
        \App\category::create([
            'id' =>'2',
           'category_name'=>'Shipping Methods'  ,
           'type'=>   'category',
           'display_name'=>'Shipping Methods',   
           ]);
           \App\category::create([
            'id' =>'3',
           'category_name'=>'Tips and Tricks' ,
           'type'=>   'category',
           'display_name'=>'Tips and Tricks',    
           ]);
              \App\category::create([
               'id' =>'4',
              'category_name'=>'Troubleshooting' ,
              'type'=>   'category',
              'display_name'=>'Troubleshooting',    
              ]);
              \App\category::create([
               'id' =>'5',
              'category_name'=>'Admin Panel'  ,
              'type'=>   'category',
              'display_name'=>'Admin Panel',   
              ]);
              \App\category::create([
               'id' =>'6',
              'category_name'=>'Customization',
              'type'=>   'category',
              'display_name'=>'Customization',     
              ]);
              \App\category::create([
                'id' =>'7',
               'category_name'=>'ابدء'  ,
               'type'=>   'category',
               'display_name'=>'ابدء',   
               ]);
               \App\category::create([
                'id' =>'8',
               'category_name'=>'طرق الشحن'   ,
               'type'=>   'category',
               'display_name'=>'طرق الشحن',  
               ]);
              \App\category::create([
                'id' =>'9',
               'category_name'=>'طرق ونصائح' ,
               'type'=>   'category',
               'display_name'=>'طرق ونصائح',    
               ]);
               \App\category::create([
                'id' =>'10',
               'category_name'=>'استكشاف الأخطاء واصلاحها' ,
               'type'=>   'category',
               'display_name'=>'استكشاف الأخطاء واصلاحها',    
               ]);
               \App\category::create([
                'id' =>'11',
               'category_name'=>'لوحة الأدمن',
               'type'=>   'category',
               'display_name'=>'لوحة الأدمن',     
               ]);
               \App\category::create([
                'id' =>'12',
               'category_name'=>'تخصيص',
               'type'=>   'category',
               'display_name'=>'تخصيص',     
               ]);
               \App\category::create([
                'id' =>'14',
               'category_name'=>'Open',
               'type'=>   'status',
               'display_name'=>'Open',     
               ]);
               \App\category::create([
                'id' =>'15',
               'category_name'=>'Closed',
               'type'=>   'status',
               'display_name'=>'Closed',     
               ]);
               \App\category::create([
                'id' =>'16',
               'category_name'=>'Pending',
               'type'=>   'status',
               'display_name'=>'Pending',     
               ]);
               \App\category::create([
                'id' =>'17',
               'category_name'=>'Spam',
               'type'=>   'status',
               'display_name'=>'Spam',     
               ]);
              
                
    }
}

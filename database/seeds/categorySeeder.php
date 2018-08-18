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
        'category_name'=>'Getting Started'     
        ]);
        \App\category::create([
            'id' =>'2',
           'category_name'=>'Shipping Methods'     
           ]);
           \App\category::create([
            'id' =>'3',
           'category_name'=>'Tips and Tricks'     
           ]);
              \App\category::create([
               'id' =>'4',
              'category_name'=>'Troubleshooting'     
              ]);
              \App\category::create([
               'id' =>'5',
              'category_name'=>'Admin Panel'     
              ]);
              \App\category::create([
               'id' =>'6',
              'category_name'=>'Customization'     
              ]);
              \App\category::create([
                'id' =>'7',
               'category_name'=>'ابدء'     
               ]);
               \App\category::create([
                'id' =>'8',
               'category_name'=>'طرق الشحن'     
               ]);
              \App\category::create([
                'id' =>'9',
               'category_name'=>'طرق ونصائح'     
               ]);
               \App\category::create([
                'id' =>'10',
               'category_name'=>'استكشاف الأخطاء واصلاحها'     
               ]);
               \App\category::create([
                'id' =>'11',
               'category_name'=>'لوحة الأدمن'     
               ]);
               \App\category::create([
                'id' =>'12',
               'category_name'=>'تخصيص'     
               ]);
    }
}

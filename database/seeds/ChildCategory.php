<?php

use Illuminate\Database\Seeder;

class ChildCategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\childCategory::create([
            'child_category_name'=>'Installation',
        ]);
        \App\childCategory::create([
            'child_category_name'=>'Introduction',
        ]);
        \App\childCategory::create([
            'child_category_name'=>'Billing',
        ]);
        \App\childCategory::create([
            'child_category_name'=>'Shipping',
        ]);
        \App\childCategory::create([
            'child_category_name'=>'Import & Export',
        ]);
        \App\childCategory::create([
            'child_category_name'=>'Settings & Configuration',
        ]);
   }
}

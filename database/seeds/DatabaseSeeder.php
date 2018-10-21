<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(userSeeder::class);
        $this->call(categorySeeder::class);
        $this->call(ticketSeeder::class);
        $this->call(siteSettings::class);
        $this->call(newTicketPage::class);
        $this->call(menuSeeder::class);
        $this->call(MenuItemsseder::class);
        $this->call(replySeeder::class);
        $this->call(ChildCategory::class);
        $this->call(ParentChildCategory::class);
        $this->call(groupSeeder::class);
        
        $this->call(allPermissionSeeder::class);
        $this->call(permissionSeeder::class);
    }
}

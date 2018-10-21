<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use View;
use App\siteSettings;
use App\newTicketPage;
use App\Menu;
use App\MenuItems;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('siteSettings',siteSettings::find(1));
        View::share('newTicketPage',newTicketPage::find(1));
        View::share('menu',Menu::all());
        View::share('menu_items',MenuItems::all());
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

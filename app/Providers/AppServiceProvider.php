<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//added for database hosting on heroku
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //added for database hosting this
        Schema::defaultStringLength(191);
    }
}

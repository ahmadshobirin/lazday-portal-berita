<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // if mysql version is lower than version 5.7
        Schema::defaultStringLength(191);

        //timezone and locale
        config(['app.locale' => 'id']);
	    Carbon::setLocale('id');
    }
}

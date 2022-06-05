<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use \Spatie\LaravelIgnition\Facades\Flare;
use \Spinen\Version\Version as Version;

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
        Schema::defaultStringLength(191);

        Flare::determineVersionUsing(function() {
            return "0.0.1"; // return your version number
        });
    }
}

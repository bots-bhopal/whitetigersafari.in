<?php

namespace App\Providers;

use App\Models\Tracker;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        Paginator::useBootstrap();
        
        view()->composer(['layouts.partial.footer'], function ($view) {
            // $trackers = Tracker::distinct()->get('ip');
            $trackers = Tracker::get('hits');
            $view->with('trackers', $trackers);
        });
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use Schema;
use URL;

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

        if($this->app->environment('production')) {
            URL::forceSchema('https');
        }

        Schema::defaultStringLength(191);

        View::composer('*', function ($view) {
            $view->with('serves',  \App\Service::orderBy('id', 'desc')->get());
            
        });
    }
}

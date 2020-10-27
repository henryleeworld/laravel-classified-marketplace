<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        view()->composer('*', function($view) {
            $view->with('search_categories', \App\Models\Category::all());
            $view->with('categories_all', \App\Models\Category::all());
            $view->with('search_cities', \App\Models\City::all());
        });
    }
}

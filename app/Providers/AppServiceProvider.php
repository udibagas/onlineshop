<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('_footer', function($view) {
        
            $view->with('pages', \App\Page::all());
        
        });

        view()->composer('errors.404', function($view) {
        
            $view->with('products', \App\Product::paginate(12));
        
        });
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

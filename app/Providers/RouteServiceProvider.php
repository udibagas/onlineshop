<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        //

        parent::boot($router);

        $router->model('faq', 'App\Faq');
        $router->model('page', 'App\Page');
        $router->model('post', 'App\Post');
        $router->model('product', 'App\Product');
        $router->model('store', 'App\Store');
        $router->model('user', 'App\User');
        $router->model('lokasi', 'App\Lokasi');
        $router->model('note', 'App\Note');
        $router->model('etalase', 'App\Etalase');

        // $router->bind('', function() {
        //     return xxx;
        // });
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require app_path('Http/routes.php');
        });
    }
}

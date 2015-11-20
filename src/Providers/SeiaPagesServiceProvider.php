<?php

namespace Seia\Pages\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class SeiaPagesServiceProvider extends ServiceProvider
{
    protected $defer = false;

    public function boot()
    {
        $this->setupRoutes($this->app->router);
        $this->loadViewsFrom(realpath(__DIR__ . '/../../resources/views'), 'pages');
        $this->publishes([
            __DIR__ . '/../../config/seia.pages.php' => config_path('seia.pages.php')
        ], 'config');
    }

    public function register()
    {
        $this->registerPackage();
        $config = include(__DIR__ . '/../../config/seia.pages.php');
        $this->mergeConfigFrom(__DIR__ . '/../../config/seia.pages.php', 'seia.pages');
    }

    protected function setupRoutes(Router $router)
    {
        if (!$this->app->routesAreCached()) {
            $router->group(['namespace' => 'Seia\Pages\Http\Controllers'], function($router){
                require __DIR__ . '/../Http/routes.php';
            });
        }
    }

    protected function registerPackage()
    {
        //
    }
}

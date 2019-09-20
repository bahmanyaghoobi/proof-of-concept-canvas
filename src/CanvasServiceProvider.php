<?php

namespace UofT\Canvas;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class CanvasServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('UofT\Canvas\CanvasController');
        $this->app->bind('canvas-message', function () {
            return new User();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes/routes.php';
        // AliasLoader::getInstance()->alias('canvas', 'canvas_api_wrapper');
    }
}

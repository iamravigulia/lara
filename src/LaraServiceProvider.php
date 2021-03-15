<?php

namespace edgewizz\lara;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class LaraServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Edgewizz\Lara\Controllers\LaraController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // dd($this);
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__ . '/components', 'lara');
        Blade::component('lara::lara.open', 'lara.open');
        Blade::component('lara::lara.index', 'lara.index');
        Blade::component('lara::lara.edit', 'lara.edit');
    }
}

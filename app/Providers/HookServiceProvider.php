<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Html\HtmlBuilder as Html;

class HookServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        require __DIR__ . "/../Http/hooks.php";
    }
}

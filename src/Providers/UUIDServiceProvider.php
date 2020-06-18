<?php

namespace Hexolus\Laravel\UUID\Providers;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/uuid.php', 'uuid'
        );
    }

    public function boot()
    {
        // Config
        $this->publishes([
            __DIR__.'/../../config/uuid.php' => config_path('uuid.php'),
        ], 'config');
    }
}

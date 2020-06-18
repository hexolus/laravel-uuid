<?php

namespace Hexolus\UUID\Providers;

use Illuminate\Support\ServiceProvider;

class UUIDServiceProvider extends ServiceProvider
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

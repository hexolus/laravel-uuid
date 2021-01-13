<?php

namespace Hexolus\UUID;

use Illuminate\Support\ServiceProvider;

class UUIDSeviceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/uuid.php', 'uuid'
        );
    }

    public function boot()
    {
        // Config
        $this->publishes([
            __DIR__.'/../config/uuid.php' => config_path('uuid.php'),
        ], 'config');
    }
}

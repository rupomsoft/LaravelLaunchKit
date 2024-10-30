<?php

namespace AppLaunchKit\LaunchKit;

use Illuminate\Support\ServiceProvider;

class LaunchKitServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(LaunchKit::class, function () {
            return new LaunchKit();
        });
    }

    public function boot()
    {
        // Any boot logic can go here if needed
    }
}


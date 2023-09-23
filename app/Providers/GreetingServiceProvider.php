<?php

namespace App\Providers;

use App\Service\Output\Text\GreetingService;
use Illuminate\Support\ServiceProvider;

class GreetingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton('greet', function () {
            return new GreetingService;
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // For 1 2 3 4 5 6 7 8 number display in pagination
        // Paginator::useBootstrap();
        Paginator::useBootstrapFive();
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            \App\Services\Interfaces\AuthInterfaceService::class,
            \App\Services\AuthService::class,
        );
        $this->app->bind(
            \App\Repositories\Interfaces\AuthInterfaceRepository::class,
            \App\Repositories\AuthRepository::class,
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

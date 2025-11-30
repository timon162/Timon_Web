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
        $this->app->singleton(
            \App\Services\Interfaces\AuthInterfaceService::class,
            \App\Services\AuthService::class,
        );
        $this->app->singleton(
            \App\Repositories\Interfaces\AuthInterfaceRepository::class,
            \App\Repositories\AuthRepository::class,
        );

        $this->app->singleton(
            \App\Services\Interfaces\ProductInterfaceService::class,
            \App\Services\ProductSevice::class,
        );
        $this->app->singleton(
            \App\Repositories\Interfaces\ProductInterfaceRepository::class,
            \App\Repositories\ProductRepository::class,
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

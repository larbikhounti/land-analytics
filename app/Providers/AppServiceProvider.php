<?php

namespace App\Providers;

use App\Contracts\SocialHandlerInterface;
use App\Contracts\SocialServiceInterface;
use App\Services\SocialHandler;
use App\Services\SocialService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(SocialHandlerInterface::class, SocialHandler::class);
        $this->app->bind(SocialServiceInterface::class , SocialService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

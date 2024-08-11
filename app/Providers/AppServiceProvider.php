<?php

namespace App\Providers;

use App\Contracts\GoogleRepositoryInterface;
use App\Contracts\LoginOption;
use App\Contracts\SocialHandlerInterface;
use App\Contracts\SocialServiceInterface;
use App\repositories\GoogleRepository;
use App\Services\LoginOptions\google;
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
        $this->app->bind(GoogleRepositoryInterface::class , GoogleRepository::class);
        $this->app->bind(LoginOption::class, function ($app) {
            if (request()->socialtype ?? session("social_type")  == 'google') {
                return $app->make(google::class);
            } else {
                throw new \Exception('Invalid social type.');
            }
        });
    }
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

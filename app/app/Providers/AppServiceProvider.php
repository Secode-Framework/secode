<?php

namespace App\Providers;

use App\Repository\UserRepository;
use App\Service\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {

        $userRepository = new UserRepository();
        $userService = new UserService();

        $userService->setUserRepository($userRepository);

        $this->app->singleton(UserRepository::class, function () use ($userRepository) {
            return $userRepository;
        });

        $this->app->singleton(UserService::class, function () use ($userService) {
            return $userService;
        });

        $this->app->singleton("APP_URL", appUrl());
        $this->app->singleton("APP_ENVIRONMENT_ID", $this->app->environmentId());
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {

    }
}

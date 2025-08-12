<?php

namespace App\Providers;

use App\Services\UserService;
use App\Services\UserServiceimpl;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Support\DeferrableProvider;

class UserServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public array $singletons = [
        UserService::class => UserServiceimpl::class,
        ];

    /**
     * Register services.
     */
    public function provides():array
    {
        //
        return [UserService::class];
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

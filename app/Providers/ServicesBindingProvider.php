<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App;

class ServicesBindingProvider extends ServiceProvider
{
    protected $services = [
        \App\Services\Api\Contracts\UserServiceInterface::class => \App\Services\Api\UserService::class,
        \App\Services\Web\Contracts\UserServiceInterface::class => \App\Services\Web\UserService::class,
        \App\Services\Api\Contracts\PositionServiceInterface::class => \App\Services\Api\PositionService::class,
        \App\Services\Web\Contracts\PositionServiceInterface::class => \App\Services\Web\PositionService::class,

        \App\Services\Api\Contracts\AzuracastServiceInterface::class => \App\Services\Api\AzuracastService::class,
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->services as $interface => $service) {
            App::bind($interface, $service);
        }
    }
}

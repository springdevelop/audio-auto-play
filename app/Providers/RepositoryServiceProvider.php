<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $services = [
        \App\Repositories\Contracts\UserRepositoryInterface::class => \App\Repositories\UserRepository::class,
        \App\Repositories\Contracts\CalendarRepositoryInterface::class => \App\Repositories\CalendarRepository::class,
        \App\Repositories\Contracts\DeviceRepositoryInterface::class => \App\Repositories\DeviceRepository::class,
        \App\Repositories\Contracts\GroupRepositoryInterface::class => \App\Repositories\GroupRepository::class,
        \App\Repositories\Contracts\PositionRepositoryInterface::class => \App\Repositories\PositionRepository::class,
        \App\Repositories\Contracts\SiteInfoRepositoryInterface::class => \App\Repositories\SiteInfoRepository::class,
        \App\Repositories\Contracts\TaskRepositoryInterface::class => \App\Repositories\TaskRepository::class,
        \App\Repositories\Contracts\TroubleRepositoryInterface::class => \App\Repositories\TroubleRepository::class,
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

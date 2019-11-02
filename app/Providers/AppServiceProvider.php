<?php

namespace App\Providers;

use App\Repositories\Eloquent\FoodRepository;
use App\Repositories\FoodRepositoryInterface;
use App\Services\FoodServiceInterface;
use App\Services\Imple\FoodService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            FoodServiceInterface::class,
            FoodService::class
        );

        $this->app->singleton(
            FoodRepositoryInterface::class,
            FoodRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

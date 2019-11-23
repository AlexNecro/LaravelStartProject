<?php

namespace App\Providers;

use App\Services\TestBasicService;
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
        $this->app->bind(TestBasicService::class, function ()   {
            return new TestBasicService(new \App\Services\TestOne('none', false, 0));
        });
        $this->app->alias(TestBasicService::class, 'service.testbasic');

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

<?php

namespace Mahdinickdel\LaravelDateConverter\Providers;

use Illuminate\Support\ServiceProvider;
use Mahdinickdel\LaravelDateConverter\DateConverterService;
use Illuminate\Contracts\Foundation\Application;

class DateConverterServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(DateConverterService::class, function (Application $app) {
            return new DateConverterService();
        });
    }

    public function boot()
    {
        // 
    }
}

<?php

namespace Mahdinickdel\LaravelDateConverter\Facades;

use Illuminate\Support\Facades\Facade;
use Mahdinickdel\LaravelDateConverter\DateConverterService;

class DateConverter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return DateConverterService::class;
    }
}

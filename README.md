# Laravel Date Converter
A Laravel package for date conversion between Jalali and Gregorian

# Note
PHP Intl Extension must be installed on server

# Installation
composer require mahdinickdel/laravel-date-converter

# Usage
use App\Services\Date\Converter\Facades\DateConverter;
DateConverter::toJalali('2020-10-20');
DateConverter::toGregorian('1378-12-10');
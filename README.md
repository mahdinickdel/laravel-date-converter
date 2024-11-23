# Laravel Date Converter
A Laravel package for date conversion between Jalali and Gregorian

# Note
PHP Intl Extension must be installed on server

# Installation
```bash
composer require mahdinickdel/laravel-date-converter
```

# Configuration
If you want translations to be displayed in persian you must install composer package nesbot/carbon and set laravel locale to fa

# Usage
```php
use use Mahdinickdel\LaravelDateConverter\Facades\DateConverter;

DateConverter::toJalali('2020-10-20'); // "1399-07-29"
DateConverter::toGregorian('1378-12-10'); // "2000-02-29 06:50:30"
DateConverter::timeAgo('2022-04-17'); // 2 سال پیش
```

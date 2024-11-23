# Laravel Date Converter
A Laravel package for date conversion between Jalali and Gregorian

# Note
PHP Intl Extension must be installed on server

# Installation
```bash
composer require mahdinickdel/laravel-date-converter
```

# Usage
```php
use App\Services\Date\Converter\Facades\DateConverter;

DateConverter::toJalali('2020-10-20');
DateConverter::toGregorian('1378-12-10');

```

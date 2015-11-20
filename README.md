# seia-laravel-pages

A pages module for use with https://github.com/philsown/seia-laravel-core, an implementation of http://philip.greenspun.com/siea/ in Laravel 5.1.

This adds "pages" functionality.

## Installation

Install seia-laravel-core, which is a Laravel 5.1 app in its own right.

Then, in your seia-laravel-core application, do `composer require philsown/seia-laravel-pages`.

Add the service provider to your `config/app.php` 'providers' array.

```lang=php
<?php

return [

    $providers = [
        // ...
        Seia\Pages\Providers\SeiaPagesServiceProvider::class,
    ];

];
```

Publish files for the package. In your seia-laravel-core application, do `php artisan publish --provider="Seia\Pages\Providers\SeiaPagesServiceProvider"`.

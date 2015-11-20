# seia-laravel-pages

A pages module for use with https://github.com/philsown/seia-laravel-core, an implementation of http://philip.greenspun.com/siea/ in Laravel 5.1.

This adds "pages" functionality.

## Installation

Install seia-laravel-core, which is a Laravel 5.1 app in its own right.

Then composer require philsown/seia-laravel-pages.

Add the service provider to your config/app.php 'providers' array.

```lang=php
<?php
    $providers = [
        // ...
        Seia\Pages\Providers\SeiaPagesServiceProvider::class,
    ];
```

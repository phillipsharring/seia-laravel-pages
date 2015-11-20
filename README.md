# seia-laravel-pages

A pages module for use with https://github.com/philsown/seia-laravel-core, which is an implementation of http://philip.greenspun.com/siea/ in Laravel 5.1.

This adds "pages" functionality, building on Seia\Core's Content and Route models.

## Installation

Install seia-laravel-core, which is a Laravel 5.1 app in its own right.

Next, in your seia-laravel-core application, add this to your composer.json file:

```lang=json
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/philsown/seia-laravel-pages"
        }
    ],
```

Then, from the command line or terminal, do this:

`composer require philsown/seia-laravel-pages`

Add the service provider to your `config/app.php` 'providers' array, like so:

```lang=php
<?php
// config/app.php

return [

    $providers = [
        // ...
        Seia\Pages\Providers\SeiaPagesServiceProvider::class,
    ];

];
```

Publish files for the package. In your seia-laravel-core application, do this:

`php artisan vendor:publish --provider="Seia\Pages\Providers\SeiaPagesServiceProvider"`

---
title: "Prefix Laravel Passport Routes"
author: "Lee Pownall"
date: "2021-06-18"
description: "How can you prefix Laravel Passport routes?"
slug: "prefix-laravel-passport-routes"
---

Out of the box [Passport](https://laravel.com/docs/8.x/passport) urls are under `oauth/*`. How can you alter these?

To add Passport routes you need to add `Passport::routes()` to the `boot` method of `AuthServiceProvider`.

```php
<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Passport::routes();
    }
}
```

If you then run `php artisan route:list --compact` you'll see the routes.


```md
+----------+-----------------+---------------------------------------------------------------------------+
| Method   | URI             | Action                                                                    |
+----------+-----------------+---------------------------------------------------------------------------+
| GET|HEAD | oauth/authorize | Laravel\Passport\Http\Controllers\AuthorizationController@authorize       |
| POST     | oauth/authorize | Laravel\Passport\Http\Controllers\ApproveAuthorizationController@approve  |
| DELETE   | oauth/authorize | Laravel\Passport\Http\Controllers\DenyAuthorizationController@deny        |
| POST     | oauth/clients   | Laravel\Passport\Http\Controllers\ClientController@store                  |
| GET|HEAD | oauth/clients   | Laravel\Passport\Http\Controllers\ClientController@forUser                |
```

To prefix these with `api` you can do the following:


```php
Passport::routes(null, [
    'prefix' => 'api/oauth',
]);
```

Out of the box [Passport](https://laravel.com/docs/8.x/passport) urls are under `oauth/*`. How can you alter these?

To add Passport routes you need to add `Passport::routes()` to the `boot` method of `AuthServiceProvider`.

```php
<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Passport::routes();
    }
}
```
If you then run `php artisan route:list --compact` you'll see the routes.

```md
+----------+-----------------+---------------------------------------------------------------------------+
| Method   | URI             | Action                                                                    |
+----------+-----------------+---------------------------------------------------------------------------+
| GET|HEAD | oauth/authorize | Laravel\Passport\Http\Controllers\AuthorizationController@authorize       |
| POST     | oauth/authorize | Laravel\Passport\Http\Controllers\ApproveAuthorizationController@approve  |
| DELETE   | oauth/authorize | Laravel\Passport\Http\Controllers\DenyAuthorizationController@deny        |
| POST     | oauth/clients   | Laravel\Passport\Http\Controllers\ClientController@store                  |
| GET|HEAD | oauth/clients   | Laravel\Passport\Http\Controllers\ClientController@forUser                |
```

To prefix these with `api` you can do the following:

```php
Passport::routes(null, [
    'prefix' => 'api/oauth',
]);
```

Or if you are running PHP 8 you can use [named arguments](https://stitcher.io/blog/php-8-named-arguments).

```php
Passport::routes(options: [
    'prefix' => 'api/oauth',
]);
```

If you run `php artisan route:list --compact` again you will see:

```md
+----------+---------------------+---------------------------------------------------------------------------+
| Method   | URI                 | Action                                                                    |
+----------+---------------------+---------------------------------------------------------------------------+
| GET|HEAD | api/oauth/authorize | Laravel\Passport\Http\Controllers\AuthorizationController@authorize       |
| POST     | api/oauth/authorize | Laravel\Passport\Http\Controllers\ApproveAuthorizationController@approve  |
| DELETE   | api/oauth/authorize | Laravel\Passport\Http\Controllers\DenyAuthorizationController@deny        |
| POST     | api/oauth/clients   | Laravel\Passport\Http\Controllers\ClientController@store                  |
| GET|HEAD | api/oauth/clients   | Laravel\Passport\Http\Controllers\ClientController@forUser                |
```

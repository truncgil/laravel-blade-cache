# Laravel Blade Cache

A Laravel package for caching Blade includes.

## Installation

You can install the package via Composer:

```bash
composer require truncgil/laravel-blade-cache
```
## Usage
First, add the service provider to the config/app.php file in the providers array (if you are not using auto-discovery):

```php
'providers' => [
    // ...
    Truncgil\LaravelBladeCache\CacheServiceProvider::class,
];
```

Next, you can use the @includeCache directive in your Blade templates:

```blade
@includeCache('your-included-blade-file', 'unique-cache-key', 60, ['name' => 'John Doe', 'age' => 30])
```
## Functions
include_cache
The include_cache function allows you to cache Blade includes. It takes the following parameters:

$path (string): The path to the Blade view file.
$key (string): The unique cache key.
$minute (int, optional): The cache duration in minutes. Defaults to 60 minutes.
$variables (array, optional): An array of variables to pass to the Blade view. Defaults to an empty array.
Example usage:

```php
include_cache('your-included-blade-file', 'unique-cache-key', 60, ['name' => 'John Doe', 'age' => 30]);
```

License
The MIT License (MIT). Please see License File for more information.
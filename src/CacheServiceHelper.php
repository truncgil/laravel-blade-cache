<?php

namespace Truncgil\LaravelBladeCache;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class CacheServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        Blade::directive('includeCache', function ($expression) {
            return "<?php include_cache($expression); ?>";
        });
    }
}

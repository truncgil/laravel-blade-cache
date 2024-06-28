<?php

namespace Truncgil\LaravelBladeCache;

use Illuminate\Support\Facades\Cache;

if (!function_exists('include_cache')) {
    function include_cache($path, $key, $minute = 60, $variables = [])
    {
        $cachedView = Cache::remember($key, $minute * 60, function () use ($path, $variables) {
            return view($path, $variables)->render();
        });

        echo $cachedView;
    }
}

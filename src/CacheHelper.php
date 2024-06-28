<?php
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;

if (!function_exists('include_cache')) {
    function include_cache($path, $key = "", $minute = 60, $variables = [])
    {
        if($key == "") {
            $key = $path;
        }
        
        $cachedView = Cache::remember($key, $minute * 60, function () use ($path, $variables) {
            return view($path, $variables)->render();
        });

        echo $cachedView;
    }
}

<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

if (!function_exists('getAvatar')) {
    /**
     * @param $email
     *
     * @return string
     */
    function getAvatar($email)
    {
        $hash = Str::length($email) === 32 && ctype_xdigit($email)
            ? Str::lower($email)
            : md5(Str::lower(trim($email)));
        $config = [
            'size' => 96,
            'd'    => 'mm',
            'r'    => 'g',
        ];
        $url = Arr::pull($config, 'url', 'https://secure.gravatar.com/avatar');
        $query = http_build_query($config, '', '&', PHP_QUERY_RFC3986);
        return $url.'/'.$hash.($query ? '?'.$query : '');
    }
}


if (!function_exists('getTitle')) {
    /**
     * route_is.
     *
     * @param string $title
     *
     * @return bool
     */
    function getTitle($title = null)
    {
        $name = config('blog.title');
        $desc = config('blog.description');
        if (!empty($title)) {
            return "{$title} - {$name}";
        }
        return !empty($desc) ? "{$name} - {$desc}" : $name;
    }
}


if (!function_exists('routeIs')) {
    /**
     * route_is.
     *
     * @param string $expression
     *
     * @return bool
     */
    function routeIs(string $expression)
    {
        return fnmatch($expression, Route::currentRouteName());
    }
}

if (!function_exists('thumbnail')) {
    function thumbnail($url, $width = 450, $height = 300, $quality = 75, $format = 'jpg')
    {
        return asset($url)."?imageView2/1/w/{$width}/h/{$height}/format/{$format}/interlace/1/q/{$quality}";
    }
}

if (!function_exists('routeIsNot')) {
    /**
     * route_is_not.
     *
     * @param string $expression
     *
     * @return bool
     */
    function routeIsNot(string $expression)
    {
        return !fnmatch($expression, Route::currentRouteName());
    }
}


if (!function_exists('cdnImage')) {
    /**
     * @param string $path
     *
     * @return bool
     */
    function cdnImage(string $path)
    {
        return $path;
    }
}

<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;

class PrismService
{
    public function footerSettings()
    {
        return [];
    }

    public function links()
    {
        $links = [
            [
                'url' => 'https://loyep.com',
                'name' => 'Loyep',
                'target' => '_blank'
            ]
        ];

        $links = json_decode(json_encode($links));
        return $links;
    }

    public function socials()
    {
        $socials = [
            [
                'name' => 'weibo',
                'link' => '#'
            ],
            [
                'name' => 'github',
                'link' => 'https://github.com/loyep'
            ]
        ];
        $socials = json_decode(json_encode($socials));
        return $socials;
    }

    public function isHome()
    {
        return Route::currentRouteName() === 'home';
    }

    public function footerTags()
    {
        return Tag::take(16)->get();
    }

    public function searchTop()
    {
        return Tag::take(3)->get();
    }

    public function footerCategories()
    {
        return Category::take(12)->get();
    }
}

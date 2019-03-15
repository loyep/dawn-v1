<?php

namespace App\Services\Admin;

class PrismAdmin
{
    /**
     * The Prism version.
     *
     * @var string
     */
    const VERSION = '1.0.0';

    /**
     * @var string
     */
    protected static $metaTitle;

    /**
     * Set Prism title.
     *
     * @param $title
     */
    public static function setTitle($title)
    {
        self::$metaTitle = $title;
    }

    /**
     * The Prism version.
     *
     * @return string
     */
    public function version()
    {
        return self::VERSION;
    }

    /**
     * Title
     *
     * @return string
     */
    public function title()
    {
        $title = self::$metaTitle;
        if (!empty($title)) {
            return $title;
        }
        return config('app.name');
    }
}

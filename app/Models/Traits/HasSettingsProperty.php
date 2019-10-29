<?php

namespace App\Models\Traits;

use Illuminate\Support\Fluent;

trait HasSettingsProperty
{
    /**
     * @param array $settings
     */
    public function setSettingsAttribute($settings)
    {
        $this->attributes['settings'] = json_encode(\array_replace_recursive($this->getSettings(), $settings));
    }

    /**
     * @return array
     */
    public function getSettings()
    {
        return \array_replace_recursive(\defined('static::DEFAULT_SETTINGS') ? \constant('static::DEFAULT_SETTINGS') : [], \json_decode($this->attributes['settings'] ?? '{}', true) ?? []);
    }

    /**
     * @return \Illuminate\Support\Fluent
     */
    public function getSettingsAttribute()
    {
        return new Fluent($this->getSettings());
    }
}

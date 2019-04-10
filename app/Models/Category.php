<?php

namespace App\Models;

use App\Models\Scopes\SlugScope;
use App\Traits\MetaFields;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\URL;

/**
 * Class Category.
 *
 * @property string slug
 */
class Category extends BaseModel
{
    use SlugScope, MetaFields;

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'image', 'description',
    ];

    /**
     * @return HasMany|null
     */
    public function posts(): ?HasMany
    {
        return $this->hasMany(Post::class);
    }

    /**
     * @return string
     */
    public function getPermLinkAttribute()
    {
        return URL::route('category.show', ['slug' => $this->slug]);
    }

    /**
     * @param string $key
     *
     * @return mixed
     */
    public function __get($key)
    {
        $value = parent::__get($key);
        if ($value === null && !property_exists($this, $key)) {
            return $this->getMetaValue($key);
        }

        return $value;
    }
}

<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Support\Facades\URL;

/**
 * Class Tag.
 *
 * @property string slug
 */
class Tag extends Model
{
    use HasSlug;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'image', 'description',
    ];

    /**
     * @return string
     */
    public function getLink()
    {
        return URL::route('tag.show', ['slug' => $this->slug]);
    }

    /**
     * @return MorphToMany|null
     */
    public function articles(): ?MorphToMany
    {
        return $this->morphedByMany(Article::class, 'taggable');
    }
}

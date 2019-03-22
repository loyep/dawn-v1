<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * Class Comment.
 *
 * @property int $commentable_id
 * @property string $commentable_type
 * @property int $user_id
 * @property int $parent_id
 * @property string $name
 * @property string $email
 * @property string $status
 * @property string $type
 * @property string $ip
 * @property string $agent
 *
 * @package App\Models
 */
class Comment extends Model
{
    protected $fillable = [
        'commentable_id', 'commentable_type', 'user_id', 'parent_id', 'name', 'email', 'status', 'type', 'ip', 'agent',
    ];

    /**
     * @return MorphOne
     */
    public function content(): MorphOne
    {
        return $this->morphOne(Content::class, 'contentable');
    }

    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }
}

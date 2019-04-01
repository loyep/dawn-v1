<?php

namespace App\Models;

use App\Models\Scopes\SlugScope;
use App\Support\Helper;
use App\Traits\MetaFields;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\URL;
use Tymon\JWTAuth\Contracts\JWTSubject;

/**
 * Class User.
 *
 * @property string name
 * @property string display_name
 */
class User extends Authenticatable implements JWTSubject
{
    use Notifiable, SlugScope, MetaFields;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'display_name', 'password', 'avatar', 'url',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    /**
     * @return array
     */
    public function getRolesAttribute()
    {
        return [
            'admin',
        ];
    }

    /**
     * @return string
     */
    public function getPermLinkAttribute()
    {
        return URL::route('user.show', ['name' => $this->name]);
    }

    public function setEmailAttribute($value)
    {
        if (empty($this->attributes['avatar'])) {
            $this->attributes['avatar'] = Helper::getAvatar($value);
        }
        $this->attributes['email'] = $value;
    }

    public function meta()
    {
        return $this->morphMany(Meta::class, 'metaable');
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * @param string $key
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

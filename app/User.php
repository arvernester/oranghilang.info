<?php

namespace App;

use App\Models\City;
use App\Models\Medium;
use App\Models\Person;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    use Sluggable;
    use HasRoles;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'city_id',
        'username',
        'name',
        'email',
        'phone',
        'address',
        'password',
        'metadata',
    ];

    protected $casts = [
        'city_id' => 'integer',
        'metadata' => 'json',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $dates = [
        'deleted_at',
    ];

    protected $appends = [
        'gravatar',
    ];

    public function getRouteKeyName(): string
    {
        return 'username';
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'username' => ['source' => 'name'],
        ];
    }

    /**
     * Get gravatar image based on registered email address.
     *
     * @return string
     */
    public function getGravatarAttribute(): string
    {
        return 'https://www.gravatar.com/avatar/' . md5($this->attributes['email']) . '?s=100';
    }

    /**
     * User belongs to City.
     *
     * @return BelongsTo
     */
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    /**
     * User has many People.
     *
     * @return HasMany
     */
    public function people(): HasMany
    {
        return $this->hasMany(Person::class);
    }

    public function medium(): MorphOne
    {
        return $this->morphOne(Medium::class, 'mediable');
    }
}

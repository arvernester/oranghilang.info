<?php

namespace App\Models;

use App\User;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use SoftDeletes;
    use Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'city_id',
        'name',
        'description',
        'metadata',
        'is_founded',
        'contact_name',
        'contact_phone',
        'contact_email',
    ];

    protected $casts = [
        'user_id' => 'integer',
        'city_id' => 'integer',
        'metadata' => 'json',
        'is_founded' => 'boolean',
    ];

    protected $dates = [
        'deleted_at',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => ['source' => 'name'],
        ];
    }

    /**
     * Person belongs to User.
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Person belongs to City.
     *
     * @return BelongsTo
     */
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    /**
     * Person has many Media (images).
     *
     * @return MorphMany
     */
    public function media(): MorphMany
    {
        return $this->morphMany(Medium::class, 'mediable');
    }
}

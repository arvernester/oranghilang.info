<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'province_id',
        'slug',
        'name',
    ];

    protected $casts = [
        'province_id' => 'integer',
    ];

    public function getRouteKey(): string
    {
        return 'slug';
    }

    /**
     * City belongs to Province.
     *
     * @return BelongsTo
     */
    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

    /**
     * One city has many User.
     *
     * @return HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    /**
     * One city has many missong People.
     *
     * @return HasMany
     */
    public function people(): HasMany
    {
        return $this->hasMany(Person::class);
    }
}

<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Province extends Model
{
    use Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug',
        'name',
    ];

    public function getRouteKeyName(): string
    {
        return 'string';
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => ['source' => 'name'],
        ];
    }

    /**
     * One city has many City.
     *
     * @return HasMany
     */
    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }
}

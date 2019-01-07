<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Medium extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'path',
        'disk',
        'metadata',
    ];

    protected $appends = [
        'full_path',
    ];

    /**
     * Get full path of uploaded media.
     *
     * @return string
     */
    public function getFullPathAttribute(): string
    {
        return url(Storage::url($this->attributes['path']));
    }

    /**
     * Polymorphic relations for Medium.
     *
     * @return MorphTo
     */
    public function mediable(): MorphTo
    {
        return $this->morphTo();
    }
}

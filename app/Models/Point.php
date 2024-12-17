<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Point extends Model
{
    use HasFactory, HasTranslations;

    protected $guarded = [];

    public $translatable = ['title'];

    public function type()
    {
        return str_replace('App\\Models\\', '', $this->pointable_type);
    }

    /**
     * Get the parent pointable model.
     */
    public function pointable(): MorphTo
    {
        return $this->morphTo();
    }
}

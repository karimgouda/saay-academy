<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrivacyPolicy extends Model
{
    use HasFactory, HasTranslations;

    protected $guarded = [];

    public $translatable = ['title'];

    /**
     * Get all of the points
     */
    public function points() : HasMany
    {
        return $this->hasMany(PrivacyPoint::class, 'privacy_policy_id');
    }
}

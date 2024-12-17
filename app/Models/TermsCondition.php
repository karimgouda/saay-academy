<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TermsCondition extends Model
{
    use HasFactory, HasTranslations;

    protected $guarded = [];

    public $translatable = ['title'];

    /**
     * Get all of the points
     */
    public function points() : HasMany
    {
        return $this->hasMany(TermPoint::class, 'term_condition_id');
    }
}

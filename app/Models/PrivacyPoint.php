<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PrivacyPoint extends Model
{
    use HasFactory, HasTranslations;

    protected $guarded = [];

    public $translatable = ['point'];

    public function privacyPolicy()
    {
        return $this->belongsTo(PrivacyPolicy::class, 'privacy_policy_id');
    }
}

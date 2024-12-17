<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TermPoint extends Model
{
    use HasFactory, HasTranslations;

    protected $guarded = [];

    public $translatable = ['point'];

    public function termCondition()
    {
        return $this->belongsTo(TermsCondition::class, 'term_condition_id');
    }
}

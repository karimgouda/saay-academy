<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AboutHistory extends Model
{
    use HasFactory, HasTranslations;

    protected $guarded = [];

    public $translatable = ['title_1', 'description_1', 'title_2', 'description_2', 'title_3', 'description_3', 'image'];
}

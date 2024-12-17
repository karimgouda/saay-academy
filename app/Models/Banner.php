<?php

namespace App\Models;

use App\Helpers\FilamentModelsHelper;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Banner extends Model
{
    use HasFactory, HasTranslations, FilamentModelsHelper;

    protected $guarded = [];

    public $translatable = ['title', 'description', 'image'];
}

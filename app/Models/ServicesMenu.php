<?php

namespace App\Models;

use App\Helpers\FilamentModelsHelper;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServicesMenu extends Model
{
    use HasFactory, HasTranslations, FilamentModelsHelper;

    protected $guarded = [];

    public $translatable = ['title', 'description', 'sub_title', 'sub_description', 'sub_title_2', 'sub_description_2', 'sub_title_3', 'sub_description_3', 'image', 'image_2', 'image_3', 'progresses_titles', 'progresses_percentages'];
}

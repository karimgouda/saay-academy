<?php

namespace App\Models;

use App\Helpers\FilamentModelsHelper;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Goal extends Model
{
    use HasFactory, HasTranslations, FilamentModelsHelper;

    protected $guarded = [];

    public $translatable = ['title', 'description', 'points', 'image', 'image_2', 'image_3'];

    /**
     * Get all of the goal's points.
     */
    // public function points(): MorphMany
    // {
    //     return $this->morphMany(Point::class, 'pointable');
    // }
}

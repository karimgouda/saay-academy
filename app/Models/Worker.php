<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Worker extends Model
{
    use HasFactory;

    use HasFactory, HasTranslations;

    protected $guarded = [];

    public $translatable = ['name', 'profession', 'description'];
}

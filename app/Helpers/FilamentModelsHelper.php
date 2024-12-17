<?php

namespace App\Helpers;

use Illuminate\Support\Collection;

trait FilamentModelsHelper
{
    /**
     * Tags iterator collection
     *
     * @param string $key
     * @return void
     */
    public function tags_iterator(string $key) : Collection
    {
        return isset($this->$key) ? collect($this->$key) : collect([]);
    }
}
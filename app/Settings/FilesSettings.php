<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class FilesSettings extends Settings
{
    public ?string $site_logo;
    public ?string $site_favicon;

    public static function group(): string
    {
        return 'files';
    }
}
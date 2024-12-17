<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class LinksSettings extends Settings
{
    public ?string $map_link;
    public ?string $video_link;

    public ?string $facebook;
    public ?string $twitter;
    public ?string $youtube;
    public ?string $instagram;
    public ?string $telegram;
    public ?string $tiktok;
    public ?string $linkedin;
    public ?string $snapchat;
    public ?string $pinterest;

    public static function group(): string
    {
        return 'links';
    }
}
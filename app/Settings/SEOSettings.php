<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SEOSettings extends Settings
{
    public ?string $head_manager_script;
    public ?string $body_manager_script;

    public ?string $meta_description;
    public ?string $canonical;

    public ?string $og_type;
    public ?string $og_title;
    public ?string $og_url;
    public ?string $og_description;
    public ?string $og_image;

    public ?string $twitter_card;
    public ?string $twitter_title;
    public ?string $twitter_site;
    public ?string $twitter_description;
    public ?string $twitter_image;
    public ?string $twitter_alt;

    public static function group(): string
    {
        return 'seo';
    }
}
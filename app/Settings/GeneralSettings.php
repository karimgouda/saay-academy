<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public ?string $site_name_ar;
    public ?string $site_name_en;

    public ?string $site_description_ar;
    public ?string $site_description_en;

    public ?array $emails;

    public ?string $whatsapp;

    public ?array $phones;

    public ?string $address_ar;
    public ?string $address_en;

    public ?string $office_en;
    public ?string $office_ar;

    public ?string $available_in_days_ar;
    public ?string $available_in_days_en;
    public ?string $available_in_hours;
    public ?string $closed_ar;
    public ?string $closed_en;
    
    public ?bool $site_active;
    
    public static function group(): string
    {
        return 'general';
    }
}
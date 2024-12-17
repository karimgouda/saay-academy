<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('seo.head_manager_script', '<script></script>');
        $this->migrator->add('seo.body_manager_script', '<script></script>');

        $this->migrator->add('seo.meta_description', '');
        $this->migrator->add('seo.canonical', 'https://ocoda.com');

        $this->migrator->add('seo.og_type', '');
        $this->migrator->add('seo.og_title', '');
        $this->migrator->add('seo.og_url', '');
        $this->migrator->add('seo.og_description', '');
        $this->migrator->add('seo.og_image', '');

        $this->migrator->add('seo.twitter_card', '');
        $this->migrator->add('seo.twitter_title', '');
        $this->migrator->add('seo.twitter_site', '');
        $this->migrator->add('seo.twitter_description', '');
        $this->migrator->add('seo.twitter_image', '');
        $this->migrator->add('seo.twitter_alt', '');
    }
};

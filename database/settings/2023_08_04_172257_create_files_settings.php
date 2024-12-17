<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('files.site_logo', 'initializing/logo.png');
        $this->migrator->add('files.site_favicon', 'initializing/favicon.png');
    }
};

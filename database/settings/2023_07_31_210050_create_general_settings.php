<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.site_name_en', 'Site Title');
        $this->migrator->add('general.site_name_ar', 'عنوان الموقع ');

        $this->migrator->add('general.site_description_en', 'Site Description');
        $this->migrator->add('general.site_description_ar', 'وصف الموقع');
        
        $this->migrator->add('general.emails', ['email.1@example.com', 'email.2@example.com']);
        
        $this->migrator->add('general.whatsapp', '+966-xx-xxxxxxx');
        
        $this->migrator->add('general.phones', []);
        
        $this->migrator->add('general.address_en', 'The Address');
        $this->migrator->add('general.address_ar', 'العنوان');
        
        $this->migrator->add('general.office_en', 'The Office');
        $this->migrator->add('general.office_ar', 'المكتب');

        $this->migrator->add('general.available_in_days_en', 'Mon to Fri');
        $this->migrator->add('general.available_in_days_ar', 'من الاثنين الي الجمعة');
        $this->migrator->add('general.available_in_hours', '09:30AM to 05:30PM');
        $this->migrator->add('general.closed_en', 'Sun');
        $this->migrator->add('general.closed_ar', 'الاحد');
        
        $this->migrator->add('general.site_active', true);
    }
};

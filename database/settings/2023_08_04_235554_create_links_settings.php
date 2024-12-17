<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('links.map_link', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14903546.801014509!2d45.0741!3d24.222141999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15e7b33fe7952a41%3A0x5960504bc21ab69b!2sSaudi%20Arabia!5e0!3m2!1sen!2seg!4v1691894069533!5m2!1sen!2seg');
        $this->migrator->add('links.video_link', 'https://www.youtube.com/embed/MLpWrANjFbI');

        $this->migrator->add('links.facebook', 'https://www.facebook.com/');
        $this->migrator->add('links.twitter', 'https://twitter.com/');
        $this->migrator->add('links.youtube', 'https://www.youtube.com/');
        $this->migrator->add('links.instagram', 'https://www.instagram.com/');
        $this->migrator->add('links.telegram', 'https://www.telegram.com/');
        $this->migrator->add('links.tiktok', 'https://www.tiktok.com/');
        $this->migrator->add('links.linkedin', 'https://www.linkedin.com/');
        $this->migrator->add('links.snapchat', 'https://www.snapchat.com/');
        $this->migrator->add('links.pinterest', 'https://www.pinterest.com/');
    }
};

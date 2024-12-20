<?php

if(!function_exists('settings')) {
    function settings(string $key)
    {
        $allSettings = [];

        $iterator = new FileSystemIterator(app_path('Settings'), FileSystemIterator::SKIP_DOTS);
        foreach ($iterator as $file) {
            $allSettings[] = resolve('App\\Settings\\' . str_replace('.php', '', $file->getFilename()));
        }

        foreach($allSettings as $setting) {
            if(isset($setting->$key)) return $setting->$key;
        }

        return '';
    }
}

if(!function_exists('public_storage')) {
    function public_storage(string $path = null) : string
    {
        return asset('storage/' . $path);
    }
}

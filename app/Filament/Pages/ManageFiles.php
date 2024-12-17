<?php

namespace App\Filament\Pages;

use Filament\Forms;
use App\Settings\FilesSettings;
use Filament\Pages\SettingsPage;
use Filament\Forms\Components\FileUpload;

class ManageFiles extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-film';

    protected static string $settings = FilesSettings::class;

    protected static ?string $navigationGroup = 'Settings';

    protected static ?int $navigationSort = 2;

    protected function getFormSchema(): array
    {
        return [
            FileUpload::make('site_logo')
                ->label('Site Logo')
                ->image(),

            FileUpload::make('site_favicon')
                ->label('Site Favicon')
                ->image(),
        ];
    }
}

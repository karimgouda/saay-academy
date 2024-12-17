<?php

namespace App\Filament\Pages;

use Filament\Forms;
use App\Settings\LinksSettings;
use Filament\Pages\SettingsPage;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;

class ManageLinks extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-link';

    protected static string $settings = LinksSettings::class;

    protected static ?string $navigationGroup = 'Settings';

    protected static ?int $navigationSort = 4;

    protected function getFormSchema(): array
    {
        return [
            Section::make('Other Links')
                ->schema([
                    Grid::make(2)
                        ->schema([
                            TextInput::make('map_link')
                                ->label('Map Link')
                                ->required(),
                            TextInput::make('video_link')
                                ->label('Video Link')
                                ->required(),
                    ]),
            ]),
                
            Section::make('Social Links')
                ->schema([
                    Grid::make(2)
                        ->schema([
                            TextInput::make('facebook')
                                ->label('Facebook Link'),

                            TextInput::make('twitter')
                                ->label('Twitter Link'),

                            TextInput::make('youtube')
                                ->label('Youtube Link'),

                            TextInput::make('instagram')
                                ->label('Instagram Link'),

                            TextInput::make('telegram')
                                ->label('Telegram Link'),

                            TextInput::make('tiktok')
                                ->label('Tiktok Link'),

                            TextInput::make('linkedin')
                                ->label('Linkedin Link'),

                            TextInput::make('snapchat')
                                ->label('Snapchat Link'),

                            TextInput::make('pinterest')
                                ->label('Pinterest Link'),
                    ]),
            ]),
        ];
    }
}

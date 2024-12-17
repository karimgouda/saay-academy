<?php

namespace App\Filament\Pages;

use Filament\Forms;
use App\Settings\SEOSettings;
use Filament\Pages\SettingsPage;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class ManageSEO extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-presentation-chart-line';

    protected static string $settings = SEOSettings::class;

    protected static ?string $navigationGroup = 'Settings';

    protected static ?int $navigationSort = 3;

    protected function getFormSchema(): array
    {
        return [
            Section::make('Body & Head Manager Scripts')
                ->schema([
                    Grid::make(2)
                        ->schema([
                            Forms\Components\Textarea::make('head_manager_script')
                                ->label('Head Manager Script'),

                            Forms\Components\Textarea::make('body_manager_script')
                                ->label('Body Manager Script'),
                        ]),
                ]),

            Section::make('Meta and Canonical')
                ->schema([
                    Grid::make(2)
                        ->schema([
                            Forms\Components\Textarea::make('meta_description')
                                ->label('Meta Description'),

                            Forms\Components\Textarea::make('canonical')
                                ->label('Canonical '),
                        ]),
                ]),

            Section::make('Open Graph')
                ->schema([
                    Grid::make(2)
                        ->schema([
                            TextInput::make('og_type')
                                ->label('Open Graph Type'),

                            TextInput::make('og_title')
                                ->label('Open Graph Title'),

                            TextInput::make('og_url')
                                ->label('Open Graph URL'),

                            TextInput::make('og_description')
                                ->label('Open Graph Description'),
                        ]),

                    Grid::make(1)
                        ->schema([
                            FileUpload::make('og_image')
                                ->label('Open Graph Image')
                                ->image(),
                        ]),
                ]),

            Section::make('Twitter')
                ->schema([
                    Grid::make(2)
                        ->schema([
                            TextInput::make('twitter_card')
                                ->label('Twitter Card'),

                            TextInput::make('twitter_title')
                                ->label('Twitter Title'),

                            TextInput::make('twitter_site')
                                ->label('Twitter Site'),

                            TextInput::make('twitter_description')
                                ->label('Twitter Description'),

                            TextInput::make('twitter_alt')
                                ->label('Twitter Alt'),
                        ]),

                    Grid::make(1)
                        ->schema([
                            FileUpload::make('twitter_image')
                                ->label('Twitter Image')
                                ->image(),
                        ]),
                ]),
        ];
    }
}

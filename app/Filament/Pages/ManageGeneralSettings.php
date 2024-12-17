<?php

namespace App\Filament\Pages;

use Filament\Forms;
use Filament\Pages\SettingsPage;
use App\Settings\GeneralSettings;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;

class ManageGeneralSettings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-adjustments';

    protected static string $settings = GeneralSettings::class;

    protected static ?string $navigationGroup = 'Settings';

    protected static ?int $navigationSort = 1;

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('site_name_ar')
                ->label('Site Name AR'),
            TextInput::make('site_name_en')
                ->label('Site Name EN'),
                
            TextInput::make('site_description_ar')
                ->label('Site Description AR'),
            TextInput::make('site_description_en')
                ->label('Site Description EN'),
                
            TagsInput::make('emails')
                ->placeholder('New Email')
                ->hint('Press tab or enter to add your filled email')
                ->label('Emails'),

            TextInput::make('whatsapp')
                ->label('Whatsapp Number'),
                
            TagsInput::make('phones')
                ->placeholder('New Phone')
                ->hint('Press tab or enter to add your filled phone')
                ->label('Phone Numbers'),
                
            TextInput::make('address_ar')
                ->label('Address AR'),
            TextInput::make('address_en')
                ->label('Address EN'),

            TextInput::make('office_ar')
                ->label('Office AR'),
            TextInput::make('office_en')
                ->label('Office EN'),

            TextInput::make('available_in_days_ar')
                ->label('Available Days AR'),
            TextInput::make('available_in_days_en')
                ->label('Available Days EN'),
                
            TextInput::make('available_in_hours')
                ->label('Available Hours'),
                
            TextInput::make('closed_ar')
                ->label('Closed AR'),
                
            TextInput::make('closed_en')
                ->label('Closed EN'),
                    
            Toggle::make('site_active')
                ->label('Active Site')
        ];
    }
}

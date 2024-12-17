<?php

namespace App\Filament\Resources\AboutSliderResource\Pages;

use App\Filament\Resources\AboutSliderResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutSlider extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = AboutSliderResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}

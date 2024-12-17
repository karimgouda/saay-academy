<?php

namespace App\Filament\Resources\AboutSliderResource\Pages;

use App\Filament\Resources\AboutSliderResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAboutSlider extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = AboutSliderResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

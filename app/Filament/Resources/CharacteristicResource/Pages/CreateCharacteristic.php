<?php

namespace App\Filament\Resources\CharacteristicResource\Pages;

use App\Filament\Resources\CharacteristicResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCharacteristic extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = CharacteristicResource::class;

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

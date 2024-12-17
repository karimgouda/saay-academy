<?php

namespace App\Filament\Resources\CharacteristicResource\Pages;

use App\Filament\Resources\CharacteristicResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCharacteristic extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = CharacteristicResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}

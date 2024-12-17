<?php

namespace App\Filament\Resources\CharacteristicResource\Pages;

use App\Filament\Resources\CharacteristicResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCharacteristics extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = CharacteristicResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // Actions\CreateAction::make(),
        ];
    }
}

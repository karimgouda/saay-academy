<?php

namespace App\Filament\Resources\ServicesMenuResource\Pages;

use App\Filament\Resources\ServicesMenuResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServicesMenus extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = ServicesMenuResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\ServicesTroubleResource\Pages;

use App\Filament\Resources\ServicesTroubleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServicesTroubles extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = ServicesTroubleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}

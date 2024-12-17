<?php

namespace App\Filament\Resources\BuildResource\Pages;

use App\Filament\Resources\BuildResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBuilds extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = BuildResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // Actions\CreateAction::make(),
        ];
    }
}

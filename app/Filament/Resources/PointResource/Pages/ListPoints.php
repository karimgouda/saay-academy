<?php

namespace App\Filament\Resources\PointResource\Pages;

use App\Filament\Resources\PointResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPoints extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = PointResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\PromiseResource\Pages;

use App\Filament\Resources\PromiseResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPromises extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = PromiseResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\WorkerResource\Pages;

use App\Filament\Resources\WorkerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWorkers extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = WorkerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\ServicesSolutionResource\Pages;

use App\Filament\Resources\ServicesSolutionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServicesSolutions extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = ServicesSolutionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\TermPointResource\Pages;

use App\Filament\Resources\TermPointResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTermPoints extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = TermPointResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}

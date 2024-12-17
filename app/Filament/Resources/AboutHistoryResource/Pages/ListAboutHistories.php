<?php

namespace App\Filament\Resources\AboutHistoryResource\Pages;

use App\Filament\Resources\AboutHistoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutHistories extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = AboutHistoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // Actions\CreateAction::make(),
        ];
    }
}

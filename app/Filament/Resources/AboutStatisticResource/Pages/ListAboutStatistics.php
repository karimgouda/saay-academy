<?php

namespace App\Filament\Resources\AboutStatisticResource\Pages;

use App\Filament\Resources\AboutStatisticResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutStatistics extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = AboutStatisticResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}

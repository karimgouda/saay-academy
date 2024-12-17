<?php

namespace App\Filament\Resources\QualityResource\Pages;

use App\Filament\Resources\QualityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListQualities extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = QualityResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // Actions\CreateAction::make(),
        ];
    }
}

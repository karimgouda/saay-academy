<?php

namespace App\Filament\Resources\FeatureResource\Pages;

use App\Filament\Resources\FeatureResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFeatures extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = FeatureResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // Actions\CreateAction::make(),
        ];
    }
}

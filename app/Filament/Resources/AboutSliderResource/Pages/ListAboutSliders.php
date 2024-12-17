<?php

namespace App\Filament\Resources\AboutSliderResource\Pages;

use App\Filament\Resources\AboutSliderResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutSliders extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = AboutSliderResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}

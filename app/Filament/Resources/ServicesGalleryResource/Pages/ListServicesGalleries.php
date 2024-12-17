<?php

namespace App\Filament\Resources\ServicesGalleryResource\Pages;

use App\Filament\Resources\ServicesGalleryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServicesGalleries extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = ServicesGalleryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}

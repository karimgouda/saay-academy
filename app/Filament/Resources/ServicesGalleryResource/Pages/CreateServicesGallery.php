<?php

namespace App\Filament\Resources\ServicesGalleryResource\Pages;

use App\Filament\Resources\ServicesGalleryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateServicesGallery extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = ServicesGalleryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

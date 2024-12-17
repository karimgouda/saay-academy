<?php

namespace App\Filament\Resources\ServicesGalleryResource\Pages;

use App\Filament\Resources\ServicesGalleryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServicesGallery extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = ServicesGalleryResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}

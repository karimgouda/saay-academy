<?php

namespace App\Filament\Resources\ServicesMenuResource\Pages;

use App\Filament\Resources\ServicesMenuResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateServicesMenu extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = ServicesMenuResource::class;

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

<?php

namespace App\Filament\Resources\PrivacyPointResource\Pages;

use App\Filament\Resources\PrivacyPointResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePrivacyPoint extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = PrivacyPointResource::class;

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

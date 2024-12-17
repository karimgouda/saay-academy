<?php

namespace App\Filament\Resources\PrivacyPointResource\Pages;

use App\Filament\Resources\PrivacyPointResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPrivacyPoint extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = PrivacyPointResource::class;

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

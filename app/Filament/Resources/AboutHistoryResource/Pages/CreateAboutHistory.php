<?php

namespace App\Filament\Resources\AboutHistoryResource\Pages;

use App\Filament\Resources\AboutHistoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAboutHistory extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = AboutHistoryResource::class;

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

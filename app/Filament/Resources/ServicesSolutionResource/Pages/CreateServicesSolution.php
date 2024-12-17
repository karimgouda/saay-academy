<?php

namespace App\Filament\Resources\ServicesSolutionResource\Pages;

use App\Filament\Resources\ServicesSolutionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateServicesSolution extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = ServicesSolutionResource::class;

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

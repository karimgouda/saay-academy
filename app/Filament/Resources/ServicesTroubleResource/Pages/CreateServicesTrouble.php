<?php

namespace App\Filament\Resources\ServicesTroubleResource\Pages;

use App\Filament\Resources\ServicesTroubleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateServicesTrouble extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = ServicesTroubleResource::class;

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

<?php

namespace App\Filament\Resources\PromiseResource\Pages;

use App\Filament\Resources\PromiseResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePromise extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = PromiseResource::class;

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

<?php

namespace App\Filament\Resources\WorkerResource\Pages;

use App\Filament\Resources\WorkerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateWorker extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = WorkerResource::class;

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

<?php

namespace App\Filament\Resources\LeaderResource\Pages;

use App\Filament\Resources\LeaderResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLeader extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = LeaderResource::class;

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

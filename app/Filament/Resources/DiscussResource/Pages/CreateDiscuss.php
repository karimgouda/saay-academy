<?php

namespace App\Filament\Resources\DiscussResource\Pages;

use App\Filament\Resources\DiscussResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDiscuss extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = DiscussResource::class;

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

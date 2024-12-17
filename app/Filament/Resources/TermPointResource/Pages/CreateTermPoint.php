<?php

namespace App\Filament\Resources\TermPointResource\Pages;

use App\Filament\Resources\TermPointResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTermPoint extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = TermPointResource::class;

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

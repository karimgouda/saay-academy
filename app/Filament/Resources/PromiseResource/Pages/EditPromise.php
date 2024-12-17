<?php

namespace App\Filament\Resources\PromiseResource\Pages;

use App\Filament\Resources\PromiseResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPromise extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = PromiseResource::class;

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

<?php

namespace App\Filament\Resources\TermPointResource\Pages;

use App\Filament\Resources\TermPointResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTermPoint extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = TermPointResource::class;

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

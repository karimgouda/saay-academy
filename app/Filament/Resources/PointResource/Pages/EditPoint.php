<?php

namespace App\Filament\Resources\PointResource\Pages;

use App\Filament\Resources\PointResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPoint extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = PointResource::class;

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

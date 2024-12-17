<?php

namespace App\Filament\Resources\ServicesSolutionResource\Pages;

use App\Filament\Resources\ServicesSolutionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServicesSolution extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = ServicesSolutionResource::class;

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

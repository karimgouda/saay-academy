<?php

namespace App\Filament\Resources\ServicesTroubleResource\Pages;

use App\Filament\Resources\ServicesTroubleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServicesTrouble extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = ServicesTroubleResource::class;

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

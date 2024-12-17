<?php

namespace App\Filament\Resources\ServicesMenuResource\Pages;

use App\Filament\Resources\ServicesMenuResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServicesMenu extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    
    protected static string $resource = ServicesMenuResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}

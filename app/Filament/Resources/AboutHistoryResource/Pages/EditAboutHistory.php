<?php

namespace App\Filament\Resources\AboutHistoryResource\Pages;

use App\Filament\Resources\AboutHistoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutHistory extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    
    protected static string $resource = AboutHistoryResource::class;

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

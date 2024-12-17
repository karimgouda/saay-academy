<?php

namespace App\Filament\Resources\QualityResource\Pages;

use App\Filament\Resources\QualityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditQuality extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    
    protected static string $resource = QualityResource::class;

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

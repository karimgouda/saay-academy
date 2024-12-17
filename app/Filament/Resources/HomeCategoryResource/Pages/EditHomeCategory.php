<?php

namespace App\Filament\Resources\HomeCategoryResource\Pages;

use App\Filament\Resources\HomeCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomeCategory extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    
    protected static string $resource = HomeCategoryResource::class;

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

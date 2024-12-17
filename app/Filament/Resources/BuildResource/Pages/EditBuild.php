<?php

namespace App\Filament\Resources\BuildResource\Pages;

use App\Filament\Resources\BuildResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBuild extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    
    protected static string $resource = BuildResource::class;

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

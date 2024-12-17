<?php

namespace App\Filament\Resources\LeaderResource\Pages;

use App\Filament\Resources\LeaderResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLeader extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    
    protected static string $resource = LeaderResource::class;

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

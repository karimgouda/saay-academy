<?php

namespace App\Filament\Resources\DiscussResource\Pages;

use App\Filament\Resources\DiscussResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDiscuss extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    
    protected static string $resource = DiscussResource::class;

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

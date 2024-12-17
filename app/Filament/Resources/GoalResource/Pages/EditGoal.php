<?php

namespace App\Filament\Resources\GoalResource\Pages;

use Filament\Pages\Actions;
use App\Filament\Resources\GoalResource;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Traits\TranslatableWithEmit;

class EditGoal extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    
    protected static string $resource = GoalResource::class;

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

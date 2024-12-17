<?php

namespace App\Filament\Resources\GoalResource\Pages;

use App\Filament\Resources\GoalResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGoals extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = GoalResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // Actions\CreateAction::make(),
        ];
    }
}

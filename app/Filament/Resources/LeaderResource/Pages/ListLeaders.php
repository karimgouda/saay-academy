<?php

namespace App\Filament\Resources\LeaderResource\Pages;

use App\Filament\Resources\LeaderResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLeaders extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = LeaderResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // Actions\CreateAction::make(),
        ];
    }
}

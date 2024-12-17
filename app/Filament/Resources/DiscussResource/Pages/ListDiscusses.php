<?php

namespace App\Filament\Resources\DiscussResource\Pages;

use App\Filament\Resources\DiscussResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDiscusses extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = DiscussResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\HomeCategoryResource\Pages;

use App\Filament\Resources\HomeCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeCategories extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = HomeCategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // Actions\CreateAction::make(),
        ];
    }
}

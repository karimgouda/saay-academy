<?php

namespace App\Filament\Resources\PrivacyPointResource\Pages;

use App\Filament\Resources\PrivacyPointResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPrivacyPoints extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = PrivacyPointResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}

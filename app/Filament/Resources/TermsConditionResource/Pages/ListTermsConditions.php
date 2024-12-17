<?php

namespace App\Filament\Resources\TermsConditionResource\Pages;

use App\Filament\Resources\TermsConditionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTermsConditions extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = TermsConditionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}

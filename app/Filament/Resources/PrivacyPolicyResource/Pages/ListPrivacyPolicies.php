<?php

namespace App\Filament\Resources\PrivacyPolicyResource\Pages;

use App\Filament\Resources\PrivacyPolicyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPrivacyPolicies extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = PrivacyPolicyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}

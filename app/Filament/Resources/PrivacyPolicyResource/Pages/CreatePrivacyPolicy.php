<?php

namespace App\Filament\Resources\PrivacyPolicyResource\Pages;

use App\Filament\Resources\PrivacyPolicyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePrivacyPolicy extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = PrivacyPolicyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

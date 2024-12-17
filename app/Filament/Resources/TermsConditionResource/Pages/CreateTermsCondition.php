<?php

namespace App\Filament\Resources\TermsConditionResource\Pages;

use App\Filament\Resources\TermsConditionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTermsCondition extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = TermsConditionResource::class;

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

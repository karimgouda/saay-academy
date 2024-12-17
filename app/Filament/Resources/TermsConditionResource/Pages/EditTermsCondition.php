<?php

namespace App\Filament\Resources\TermsConditionResource\Pages;

use App\Filament\Resources\TermsConditionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTermsCondition extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = TermsConditionResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}

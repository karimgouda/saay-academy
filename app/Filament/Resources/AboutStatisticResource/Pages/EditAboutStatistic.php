<?php

namespace App\Filament\Resources\AboutStatisticResource\Pages;

use App\Filament\Resources\AboutStatisticResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutStatistic extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = AboutStatisticResource::class;

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

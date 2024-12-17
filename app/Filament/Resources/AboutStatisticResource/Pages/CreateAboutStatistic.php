<?php

namespace App\Filament\Resources\AboutStatisticResource\Pages;

use App\Filament\Resources\AboutStatisticResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAboutStatistic extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = AboutStatisticResource::class;

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

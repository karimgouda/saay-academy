<?php

namespace App\Filament\Resources\QualityResource\Pages;

use App\Filament\Resources\QualityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateQuality extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = QualityResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
    protected static ?string $title = 'Packages';

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

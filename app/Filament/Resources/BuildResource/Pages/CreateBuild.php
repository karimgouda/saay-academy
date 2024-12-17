<?php

namespace App\Filament\Resources\BuildResource\Pages;

use App\Filament\Resources\BuildResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBuild extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = BuildResource::class;

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

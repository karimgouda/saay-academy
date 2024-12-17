<?php

namespace App\Filament\Resources\SkillResource\Pages;

use App\Filament\Resources\SkillResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSkills extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = SkillResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\GoalResource\Pages;

use Filament\Pages\Actions;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Repeater;
use App\Filament\Resources\GoalResource;
use App\Filament\Resources\PointResource;
use Filament\Resources\Pages\CreateRecord;

class CreateGoal extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = GoalResource::class;

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

    // protected function getSteps(): array
    // {
    //     return [
    //         Wizard\Step::make("Points")
    //         ->icon('heroicon-o-cube-transparent')
    //         ->schema([
    //             Repeater::make('conditions')
    //                 ->disableLabel()
    //                 ->createItemButtonLabel('Add Point')
    //                 ->relationship()
    //                 ->columnSpan(2)
    //                 ->schema(PointResource::schema())
    //         ]),
    //     ];
    // }
}

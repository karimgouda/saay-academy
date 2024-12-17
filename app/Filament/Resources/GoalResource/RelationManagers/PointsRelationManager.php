<?php

namespace App\Filament\Resources\GoalResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use App\Filament\Resources\PointResource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Traits\HasTranslatableOwner;
use Filament\Resources\Concerns\Translatable;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;

class PointsRelationManager extends RelationManager
{
    // use Translatable;
    use HasTranslatableOwner;

    protected static string $relationship = 'points';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(PointResource::schema());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(PointResource::columns())
            ->filters([
                //
            ])
            ->headerActions([
                // Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}

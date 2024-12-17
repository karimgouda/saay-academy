<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Point;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\PointResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PointResource\RelationManagers;

class PointResource extends Resource
{
    use Translatable;

    protected static ?string $model = Point::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static bool $shouldRegisterNavigation = false;

    public static function schema()
    {
        return [
            Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(255),
        ];
    }

    public static function columns()
    {
        return [
            TextColumn::make('id')->sortable()->searchable(),
            TextColumn::make('title')->limit(50)->searchable(),
            TextColumn::make('pointable_type')->label('Related To')->getStateUsing(function(Model $record) {
                return $record->type();
            }),
            TextColumn::make('created_at')
                    ->dateTime(),
                TextColumn::make('updated_at')
                    ->dateTime(),
        ];
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema(self::schema());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(self::columns())
            ->defaultSort('id', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPoints::route('/'),
            'create' => Pages\CreatePoint::route('/create'),
            'edit' => Pages\EditPoint::route('/{record}/edit'),
        ];
    }
}

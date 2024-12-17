<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use App\Models\AboutStatistic;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextArea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AboutStatisticResource\Pages;
use App\Filament\Resources\AboutStatisticResource\RelationManagers;
use Filament\Resources\Concerns\Translatable;
use Filament\Tables\Columns\ToggleColumn;

class AboutStatisticResource extends Resource
{
    use Translatable;

    protected static ?string $model = AboutStatistic::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-alt';

    protected static ?string $navigationGroup = 'About Page';

    protected static ?string $navigationLabel = 'Statistics';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('title')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Textarea::make('description'),
                    TextInput::make('number')
                        ->required()
                        ->maxLength(255),
                    Toggle::make('has_percentage')
                        ->required(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->searchable(),
                TextColumn::make('title')->limit(50)->searchable(),
                TextColumn::make('description')->limit(50)->searchable(),
                TextColumn::make('number')->limit(50)->searchable(),
                ToggleColumn::make('has_percentage'),
                TextColumn::make('created_at')
                    ->dateTime(),
                TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->defaultSort('id', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListAboutStatistics::route('/'),
            'create' => Pages\CreateAboutStatistic::route('/create'),
            'edit' => Pages\EditAboutStatistic::route('/{record}/edit'),
        ];
    }
}

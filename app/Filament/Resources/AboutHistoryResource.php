<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\AboutHistory;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextArea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AboutHistoryResource\Pages;
use App\Filament\Resources\AboutHistoryResource\RelationManagers;

class AboutHistoryResource extends Resource
{
    use Translatable;

    protected static ?string $model = AboutHistory::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-alt';

    protected static ?string $navigationGroup = 'About Page';

    protected static ?string $navigationLabel = 'History';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('title_1')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Textarea::make('description_1'),
                    TextInput::make('title_2')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Textarea::make('description_2'),
                    TextInput::make('title_3')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Textarea::make('description_3'),
                    FileUpload::make('image')
                        ->image(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->searchable(),
                TextColumn::make('title_1')->limit(50)->searchable(),
                TextColumn::make('description_1')->limit(50)->searchable(),
                TextColumn::make('title_2')->limit(50)->searchable(),
                TextColumn::make('description_2')->limit(50)->searchable(),
                TextColumn::make('title_3')->limit(50)->searchable(),
                TextColumn::make('description_3')->limit(50)->searchable(),
                ImageColumn::make('image'),
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
                // Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListAboutHistories::route('/'),
            'create' => Pages\CreateAboutHistory::route('/create'),
            'edit' => Pages\EditAboutHistory::route('/{record}/edit'),
        ];
    }
}

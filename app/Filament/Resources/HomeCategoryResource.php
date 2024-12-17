<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\HomeCategory;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextArea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\HomeCategoryResource\Pages;
use App\Filament\Resources\HomeCategoryResource\RelationManagers;
use Filament\Resources\Concerns\Translatable;

class HomeCategoryResource extends Resource
{
    use Translatable;

    protected static ?string $model = HomeCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static ?string $navigationGroup = 'Home Page';

    protected static ?int $navigationSort = 7;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('title')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Textarea::make('description'),
                    FileUpload::make('image')
                        ->label('Main Image')
                        ->image(),
                    TextInput::make('video')
                        ->required()
                        ->maxLength(255),
                    TagsInput::make('progresses_titles')
                        ->placeholder('New Progress Title')
                        ->hint('Press tab or enter to add your filled progress title')
                        ->label('Progress Title'),
                    TagsInput::make('progresses_percentages')
                        ->placeholder('New Progress Percentage')
                        ->hint('Press tab or enter to add your filled progress percentage')
                        ->label('Progress Percentage'),
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
                TextColumn::make('progresses_titles')->limit(50)->searchable(),
                TextColumn::make('progresses_percentages')->limit(50)->searchable(),
                ImageColumn::make('image'),
                TextColumn::make('video')->limit(50)->searchable(),
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
            'index' => Pages\ListHomeCategories::route('/'),
            'create' => Pages\CreateHomeCategory::route('/create'),
            'edit' => Pages\EditHomeCategory::route('/{record}/edit'),
        ];
    }

    public static function getTranslatableLocales(): array
    {
        return ['en', 'ar'];
    }
}

<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\ServicesMenu;
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
use App\Filament\Resources\ServicesMenuResource\Pages;
use App\Filament\Resources\ServicesMenuResource\RelationManagers;
use Filament\Resources\Concerns\Translatable;

class ServicesMenuResource extends Resource
{
    use Translatable;

    protected static ?string $model = ServicesMenu::class;

    protected static ?string $navigationIcon = 'heroicon-o-server';

    protected static ?string $navigationGroup = 'Services Page';

    protected static ?int $navigationSort = 1;

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
                    FileUpload::make('image_2')
                        ->label('Second Image')
                        ->image(),
                    FileUpload::make('image_3')
                        ->label('Third Image')
                        ->image(),
                    TextInput::make('sub_title')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Textarea::make('sub_description'),
                    TextInput::make('sub_title_2')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Textarea::make('sub_description_2'),
                    TextInput::make('sub_title_3')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Textarea::make('sub_description_3'),
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
                TextColumn::make('sub_title')->limit(50)->searchable(),
                TextColumn::make('sub_description')->limit(50)->searchable(),
                TextColumn::make('sub_title_2')->limit(50)->searchable(),
                TextColumn::make('sub_description_2')->limit(50)->searchable(),
                TextColumn::make('sub_title_3')->limit(50)->searchable(),
                TextColumn::make('sub_description_3')->limit(50)->searchable(),
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
            'index' => Pages\ListServicesMenus::route('/'),
            'create' => Pages\CreateServicesMenu::route('/create'),
            'edit' => Pages\EditServicesMenu::route('/{record}/edit'),
        ];
    }
}

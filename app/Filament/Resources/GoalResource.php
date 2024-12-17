<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Goal;
use Filament\Tables;
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
use App\Filament\Resources\GoalResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\GoalResource\RelationManagers;
use App\Filament\Resources\GoalResource\RelationManagers\PointsRelationManager;
use Filament\Forms\Components\TagsInput;

class GoalResource extends Resource
{
    use Translatable;

    protected static ?string $model = Goal::class;

    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static ?string $navigationGroup = 'Home Page';

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
                    TagsInput::make('points')
                        ->placeholder('New Point')
                        ->hint('Press tab or enter to add your filled point')
                        ->label('Points'),
                    FileUpload::make('image')
                        ->label('Main Image')
                        ->image(),
                    FileUpload::make('image_2')
                        ->label('Second Sub Image')
                        ->image(),
                    FileUpload::make('image_3')
                        ->label('Third Sub Image')
                        ->image(),
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
                TextColumn::make('points')->limit(50)->searchable(),
                ImageColumn::make('image'),
                ImageColumn::make('image_2'),
                ImageColumn::make('image_3'),
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
            // PointsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGoals::route('/'),
            'create' => Pages\CreateGoal::route('/create'),
            'edit' => Pages\EditGoal::route('/{record}/edit'),
        ];
    }

    public static function getTranslatableLocales(): array
    {
        return ['en', 'ar'];
    }
}

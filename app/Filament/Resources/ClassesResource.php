<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClassesResource\Pages;
use App\Filament\Resources\ClassesResource\RelationManagers;
use App\Models\Classes;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ClassesResource extends Resource
{
    protected static ?string $model = Classes::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Nama Kelas'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Kelas')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->emptyStateHeading('Tidak Ada Kelas')
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListClasses::route('/'),
            'create' => Pages\CreateClasses::route('/create'),
            'edit' => Pages\EditClasses::route('/{record}/edit'),
        ];
    }
}
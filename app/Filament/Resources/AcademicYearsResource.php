<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\AcademicYears;
use Filament\Resources\Resource;
use App\Filament\Resources\AcademicYearsResource\Pages;

class AcademicYearsResource extends Resource
{
    protected static ?string $model = AcademicYears::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-date-range';

    protected static ?string $navigationLabel = 'Tahun Ajaran';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Tahun Ajaran'),
                Forms\Components\DatePicker::make('year_start')
                    ->required()
                    ->label('Tahun Mulai')
                    ->native(false),
                Forms\Components\DatePicker::make('year_end')
                    ->required()
                    ->label('Tahun Selesai')
                    ->native(false),
            ])
            ->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Tahun Ajaran'),
                Tables\Columns\TextColumn::make('year_start')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('year_end')
                    ->numeric()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->emptyStateHeading('Tidak Ada Tahun Ajaran')
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
            'index' => Pages\ListAcademicYears::route('/'),
            'create' => Pages\CreateAcademicYears::route('/create'),
            'edit' => Pages\EditAcademicYears::route('/{record}/edit'),
        ];
    }
}

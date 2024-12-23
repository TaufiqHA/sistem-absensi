<?php

namespace App\Filament\Resources\AcademicYearsResource\Pages;

use App\Filament\Resources\AcademicYearsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAcademicYears extends ListRecords
{
    protected static string $resource = AcademicYearsResource::class;
    protected static ?string $title = 'Tahun Ajaran';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah Tahun Ajaran'),
        ];
    }
}

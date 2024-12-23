<?php

namespace App\Filament\Resources\AcademicYearsResource\Pages;

use App\Filament\Resources\AcademicYearsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAcademicYears extends EditRecord
{
    protected static string $resource = AcademicYearsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

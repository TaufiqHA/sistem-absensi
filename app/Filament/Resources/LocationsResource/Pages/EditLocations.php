<?php

namespace App\Filament\Resources\LocationsResource\Pages;

use App\Filament\Resources\LocationsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLocations extends EditRecord
{
    protected static string $resource = LocationsResource::class;
    protected static ?string $title = 'Edit Lokasi';

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->label('Hapus'),
        ];
    }
}

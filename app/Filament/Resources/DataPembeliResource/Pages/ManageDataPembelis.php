<?php

namespace App\Filament\Resources\DataPembeliResource\Pages;

use App\Filament\Resources\DataPembeliResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageDataPembelis extends ManageRecords
{
    protected static string $resource = DataPembeliResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

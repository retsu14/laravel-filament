<?php

namespace App\Filament\Resources\WalkInResource\Pages;

use App\Filament\Resources\WalkInResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWalkIns extends ListRecords
{
    protected static string $resource = WalkInResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

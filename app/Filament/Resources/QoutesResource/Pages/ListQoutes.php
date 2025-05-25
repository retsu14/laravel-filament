<?php

namespace App\Filament\Resources\QoutesResource\Pages;

use App\Filament\Resources\QoutesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListQoutes extends ListRecords
{
    protected static string $resource = QoutesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

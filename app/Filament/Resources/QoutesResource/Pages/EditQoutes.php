<?php

namespace App\Filament\Resources\QoutesResource\Pages;

use App\Filament\Resources\QoutesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditQoutes extends EditRecord
{
    protected static string $resource = QoutesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\WalkInResource\Pages;

use App\Filament\Resources\WalkInResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWalkIn extends EditRecord
{
    protected static string $resource = WalkInResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

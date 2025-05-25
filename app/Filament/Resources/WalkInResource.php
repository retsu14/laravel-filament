<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WalkInResource\Pages;
use App\Filament\Resources\WalkInResource\RelationManagers;
use App\Models\WalkIn;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WalkInResource extends Resource
{
    protected static ?string $model = WalkIn::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationGroup = 'Feature';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
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
            'index' => Pages\ListWalkIns::route('/'),
            'create' => Pages\CreateWalkIn::route('/create'),
            'edit' => Pages\EditWalkIn::route('/{record}/edit'),
        ];
    }
}

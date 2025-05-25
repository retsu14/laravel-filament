<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QoutesResource\Pages;
use App\Filament\Resources\QoutesResource\RelationManagers;
use App\Models\Qoutes;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class QoutesResource extends Resource
{
    protected static ?string $model = Qoutes::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

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
            'index' => Pages\ListQoutes::route('/'),
            'create' => Pages\CreateQoutes::route('/create'),
            'edit' => Pages\EditQoutes::route('/{record}/edit'),
        ];
    }
}

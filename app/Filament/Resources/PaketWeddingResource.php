<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaketWeddingResource\Pages;
use App\Filament\Resources\PaketWeddingResource\RelationManagers;
use App\Models\PaketWedding;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PaketWeddingResource extends Resource
{
    protected static ?string $model = PaketWedding::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

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
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListPaketWeddings::route('/'),
            'create' => Pages\CreatePaketWedding::route('/create'),
            'edit' => Pages\EditPaketWedding::route('/{record}/edit'),
        ];
    }    
}

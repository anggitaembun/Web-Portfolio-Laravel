<?php

namespace App\Filament\Resources\PaketWeddingResource\Pages;

use App\Filament\Resources\PaketWeddingResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPaketWeddings extends ListRecords
{
    protected static string $resource = PaketWeddingResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

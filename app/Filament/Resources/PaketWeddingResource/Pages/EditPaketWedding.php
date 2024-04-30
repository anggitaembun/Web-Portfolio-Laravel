<?php

namespace App\Filament\Resources\PaketWeddingResource\Pages;

use App\Filament\Resources\PaketWeddingResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPaketWedding extends EditRecord
{
    protected static string $resource = PaketWeddingResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

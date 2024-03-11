<?php

namespace App\Filament\Resources\FalafelResource\Pages;

use App\Filament\Resources\FalafelResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFalafel extends EditRecord
{
    protected static string $resource = FalafelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

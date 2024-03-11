<?php

namespace App\Filament\Resources\FatayerResource\Pages;

use App\Filament\Resources\FatayerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFatayer extends EditRecord
{
    protected static string $resource = FatayerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

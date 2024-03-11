<?php

namespace App\Filament\Resources\JuicesResource\Pages;

use App\Filament\Resources\JuicesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJuices extends EditRecord
{
    protected static string $resource = JuicesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\FalafelResource\Pages;

use App\Filament\Resources\FalafelResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFalafels extends ListRecords
{
    protected static string $resource = FalafelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

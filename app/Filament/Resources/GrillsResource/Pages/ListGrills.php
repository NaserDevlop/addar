<?php

namespace App\Filament\Resources\GrillsResource\Pages;

use App\Filament\Resources\GrillsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGrills extends ListRecords
{
    protected static string $resource = GrillsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

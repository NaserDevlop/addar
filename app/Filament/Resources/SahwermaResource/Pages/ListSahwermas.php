<?php

namespace App\Filament\Resources\SahwermaResource\Pages;

use App\Filament\Resources\SahwermaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSahwermas extends ListRecords
{
    protected static string $resource = SahwermaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

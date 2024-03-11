<?php

namespace App\Filament\Resources\AppetizerResource\Pages;

use App\Filament\Resources\AppetizerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAppetizers extends ListRecords
{
    protected static string $resource = AppetizerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

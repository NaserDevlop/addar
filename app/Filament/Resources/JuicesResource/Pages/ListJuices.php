<?php

namespace App\Filament\Resources\JuicesResource\Pages;

use App\Filament\Resources\JuicesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJuices extends ListRecords
{
    protected static string $resource = JuicesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

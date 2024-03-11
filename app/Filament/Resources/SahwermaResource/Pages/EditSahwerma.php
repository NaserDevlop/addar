<?php

namespace App\Filament\Resources\SahwermaResource\Pages;

use App\Filament\Resources\SahwermaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSahwerma extends EditRecord
{
    protected static string $resource = SahwermaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

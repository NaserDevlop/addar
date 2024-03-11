<?php

namespace App\Filament\Resources\BroastResource\Pages;

use App\Filament\Resources\BroastResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBroast extends EditRecord
{
    protected static string $resource = BroastResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

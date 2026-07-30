<?php

namespace App\Filament\Resources\Profilos\Pages;

use App\Filament\Resources\Profilos\ProfiloResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditProfilo extends EditRecord
{
    protected static string $resource = ProfiloResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}

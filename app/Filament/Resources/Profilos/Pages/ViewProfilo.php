<?php

namespace App\Filament\Resources\Profilos\Pages;

use App\Filament\Resources\Profilos\ProfiloResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewProfilo extends ViewRecord
{
    protected static string $resource = ProfiloResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}

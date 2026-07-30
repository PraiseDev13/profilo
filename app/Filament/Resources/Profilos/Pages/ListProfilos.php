<?php

namespace App\Filament\Resources\Profilos\Pages;

use App\Filament\Resources\Profilos\ProfiloResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProfilos extends ListRecords
{
    protected static string $resource = ProfiloResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

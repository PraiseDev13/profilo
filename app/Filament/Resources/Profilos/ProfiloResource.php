<?php

namespace App\Filament\Resources\Profilos;

use App\Filament\Resources\Profilos\Pages\CreateProfilo;
use App\Filament\Resources\Profilos\Pages\EditProfilo;
use App\Filament\Resources\Profilos\Pages\ListProfilos;
use App\Filament\Resources\Profilos\Pages\ViewProfilo;
use App\Filament\Resources\Profilos\Schemas\ProfiloForm;
use App\Filament\Resources\Profilos\Schemas\ProfiloInfolist;
use App\Filament\Resources\Profilos\Tables\ProfilosTable;
use App\Models\Profilo;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProfiloResource extends Resource
{
    protected static ?string $model = Profilo::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'profilo';

    public static function form(Schema $schema): Schema
    {
        return ProfiloForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ProfiloInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProfilosTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListProfilos::route('/'),
            'create' => CreateProfilo::route('/create'),
            'view' => ViewProfilo::route('/{record}'),
            'edit' => EditProfilo::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources\TimeTables;

use App\Filament\Resources\TimeTables\Pages\CreateTimeTable;
use App\Filament\Resources\TimeTables\Pages\EditTimeTable;
use App\Filament\Resources\TimeTables\Pages\ListTimeTables;
use App\Filament\Resources\TimeTables\Schemas\TimeTableForm;
use App\Filament\Resources\TimeTables\Tables\TimeTablesTable;
use App\Models\TimeTable;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TimeTableResource extends Resource
{
    protected static ?string $model = TimeTable::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return TimeTableForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TimeTablesTable::configure($table);
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
            'index' => ListTimeTables::route('/'),
            'create' => CreateTimeTable::route('/create'),
            'edit' => EditTimeTable::route('/{record}/edit'),
        ];
    }
}

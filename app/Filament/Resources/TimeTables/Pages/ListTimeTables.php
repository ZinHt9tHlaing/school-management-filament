<?php

namespace App\Filament\Resources\TimeTables\Pages;

use App\Filament\Resources\TimeTables\TimeTableResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTimeTables extends ListRecords
{
    protected static string $resource = TimeTableResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

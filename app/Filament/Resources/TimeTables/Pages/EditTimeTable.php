<?php

namespace App\Filament\Resources\TimeTables\Pages;

use App\Filament\Resources\TimeTables\TimeTableResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTimeTable extends EditRecord
{
    protected static string $resource = TimeTableResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

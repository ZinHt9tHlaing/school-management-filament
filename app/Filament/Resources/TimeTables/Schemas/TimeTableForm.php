<?php

namespace App\Filament\Resources\TimeTables\Schemas;

use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class TimeTableForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('day')
                    ->options([
                        'Monday' => 'Monday',
                        'Tuesday' => 'Tuesday',
                        'Wednesday' => 'Wednesday',
                        'Thursday' => 'Thursday',
                        'Friday' => 'Friday',
                    ])
                    ->required(),

                Select::make('period')
                    ->options([
                        1 => 'Period 1',
                        2 => 'Period 2',
                        3 => 'Period 3',
                        4 => 'Period 4',
                        5 => 'Period 5',
                        6 => 'Period 6',
                        7 => 'Period 7',
                    ])
                    ->required(),

                Select::make('subject_id')
                    ->relationship('subject', 'name') // assumes Subject model has 'name'
                    ->required(),
            ]);
    }
}

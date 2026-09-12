<?php

namespace App\Filament\Resources\TimeTables\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TimeTablesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('serial_no')->label('No.')->rowIndex(),
                TextColumn::make('day')->searchable()->sortable(),
                TextColumn::make('period')->searchable()->sortable(),
                TextColumn::make('subject.name')->searchable()->sortable(),
                TextColumn::make('created_at')->date('M d Y')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}

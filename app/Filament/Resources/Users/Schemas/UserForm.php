<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required()->maxLength(255),
                TextInput::make('email')->required()->email(),
                Select::make('role_id')->label('Role')
                    ->relationship('role', 'name') // assumes Role model has a 'name' field
                    ->required(),
                TextInput::make('password')
                    ->password()
                    ->revealable() // show reveal button
                    ->required(fn($context) => $context === 'create') // only required on create
                    ->minLength(6)
                    ->dehydrated(fn($state) => filled($state)), // store only if filled
            ]);
    }
}

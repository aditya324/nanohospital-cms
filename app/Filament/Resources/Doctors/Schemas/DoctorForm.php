<?php

namespace App\Filament\Resources\Doctors\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class DoctorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                TextInput::make('photo')
                    ->default(null),
                TextInput::make('qualification')
                    ->default(null),
                TextInput::make('designation')
                    ->default(null),
                TextInput::make('kmc_number')
                    ->default(null),
                TextInput::make('location')
                    ->default(null),
                TextInput::make('experience_years')
                    ->numeric()
                    ->default(null),
                Textarea::make('about')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('speciality_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}

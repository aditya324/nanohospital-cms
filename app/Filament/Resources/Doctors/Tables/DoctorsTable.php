<?php

namespace App\Filament\Resources\Doctors\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DoctorsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('photo')->square(),

                TextColumn::make('name')->searchable(),

                TextColumn::make('speciality.name')
                    ->label('Speciality')
                    ->badge(),

                TextColumn::make('location')->badge(),

                TextColumn::make('kmc_number')->label('KMC'),

                TextColumn::make('created_at')->date(),
            ])
            ->defaultSort('name');
    }
}

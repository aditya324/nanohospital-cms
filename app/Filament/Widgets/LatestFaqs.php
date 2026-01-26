<?php

namespace App\Filament\Widgets;

use Filament\Actions\BulkActionGroup;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;
use SpecialityFaq;

class LatestFaqs extends TableWidget
{
    public function table(Table $table): Table
    {
        return $table
        // This tells the widget to pull the latest FAQs from the database
        ->query(\App\Models\SpecialityFaq::query()->latest()) 
        ->columns([
            \Filament\Tables\Columns\TextColumn::make('speciality.name')
                ->label('Speciality')
                ->badge(),
            \Filament\Tables\Columns\TextColumn::make('question')
                ->wrap(),
            \Filament\Tables\Columns\TextColumn::make('created_at')
                ->label('Date Added')
                ->dateTime(),
        ]);
    }
}

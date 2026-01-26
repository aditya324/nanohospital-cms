<?php

namespace App\Filament\Resources\Specialities\RelationManagers;

use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\CreateAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;

class FaqsRelationManager extends RelationManager
{
    protected static string $relationship = 'faqs';

    protected static ?string $title = 'FAQs';

    public function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('question')
                ->required()
                ->columnSpanFull(),

            Textarea::make('answer')
                ->required()
                ->rows(4)
                ->columnSpanFull(),

            TextInput::make('sort_order')
                ->numeric()
                ->default(0),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->reorderable('sort_order')
            ->defaultSort('sort_order')
            ->columns([
                TextColumn::make('question')
                    ->limit(70)
                    ->searchable(),

                TextColumn::make('sort_order')
                    ->label('Order'),
            ])
            ->headerActions([
                CreateAction::make(),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ]);
    }
}

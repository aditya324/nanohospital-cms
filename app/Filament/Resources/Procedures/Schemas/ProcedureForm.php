<?php

namespace App\Filament\Resources\Procedures\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ProcedureForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Procedure Details')
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(
                                fn($state, $set) =>
                                $set('slug', Str::slug($state))
                            ),

                        TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true),

                        RichEditor::make('content')
                            ->columnSpanFull()
                            ->required(),
                    ])
                    ->columns(2),

                Section::make('SEO Settings')
                    ->schema([
                        TextInput::make('seo_title')
                            ->maxLength(60),

                        Textarea::make('seo_description')
                            ->rows(3)
                            ->maxLength(160),

                        TextInput::make('seo_keywords')
                            ->placeholder('heart surgery, angioplasty, bypass surgery'),
                    ])
                    ->columns(1),

                Toggle::make('is_active')
                    ->default(true),
            ]);
    }
}

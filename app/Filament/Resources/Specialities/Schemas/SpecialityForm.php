<?php

namespace App\Filament\Resources\Specialities\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Illuminate\Support\Str;
use Filament\Forms\Components\Repeater;

class SpecialityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([

            Section::make('Basic Information')
                ->schema([
                    TextInput::make('name')
                        ->required()
                        ->live(onBlur: true)
                        ->afterStateUpdated(
                            fn($state, callable $set) =>
                            $set('slug', Str::slug($state))
                        ),

                    TextInput::make('slug')
                        ->required()
                        ->unique(ignoreRecord: true),

                    FileUpload::make('icon')
                        ->image()
                        ->disk('public')
                        ->directory('specialities/icons')
                        ->visibility('public')
                        ->moveFiles()
                        ->imageEditor()
                        ->afterStateHydrated(function ($state, $set) {
                            if ($state) {
                                $set('icon', $state);
                            }
                        }),

                    FileUpload::make('banner_image')
                        ->image()
                        ->disk('public')
                        ->directory('specialities/banners')
                        ->visibility('public')
                        ->moveFiles()
                        ->imageEditor()
                        ->afterStateHydrated(function ($state, $set) {
                            if ($state) {
                                $set('banner_image', $state);
                            }
                        }),

                    Toggle::make('is_active')->default(true),
                ])
                ->columns(2),

            Section::make('About Section')
                ->schema([
                    RichEditor::make('about_intro')->label('Intro Paragraph'),
                    RichEditor::make('about_more')->label('Read More Content'),
                ]),

            Section::make('Page Content')
                ->schema([
                    RichEditor::make('overview_content'),
                    RichEditor::make('treatments_content'),
                    RichEditor::make('facilities_content'),
                    RichEditor::make('conditions_content'),
                    RichEditor::make('risks_content'),
                    RichEditor::make('subspecialties_content'),
                ]),

            Section::make('SEO')
                ->schema([
                    TextInput::make('meta_title'),
                    Textarea::make('meta_description')->rows(3),
                ]),
            Section::make('FAQs')
                ->schema([
                    Repeater::make('faqs')
                        ->relationship() // only if you have a separate FAQs table (see Option B below)
                        ->schema([
                            TextInput::make('question')
                                ->required()
                                ->label('Question')
                                ->columnSpanFull(),

                            TextInput::make('answer')
                                ->required()
                                ->label('Answer')
                                ->columnSpanFull(),
                        ])
                        ->addActionLabel('Add FAQ')
                        ->reorderable()
                        ->collapsible()
                        ->cloneable()
                        ->itemLabel(fn(array $state): ?string => $state['question'] ?? null)
                        ->columns(1),
                ]),

        ]);
    }
}

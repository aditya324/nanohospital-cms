<?php

namespace App\Filament\Resources\HealthPackages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Section;
use Filament\Schemas\Components\Fieldset as ComponentsFieldset;
use Filament\Schemas\Components\Section as ComponentsSection;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class HealthPackageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn($state, $set) => $set('slug', Str::slug($state))),

                TextInput::make('slug')->required()->unique(ignoreRecord: true),

                Select::make('gender')
                    ->options([
                        'Male' => 'Male',
                        'Female' => 'Female',
                        'Both' => 'Male/Female',
                    ]),

                // Using decimal columns from your table
                TextInput::make('original_price')->numeric()->prefix('₹'),
                TextInput::make('discount_price')->numeric()->prefix('₹')->required(),

                // Old price column (if still in DB)
                TextInput::make('price')->numeric()->prefix('₹'),

                FileUpload::make('image')
                    ->image()
                   
                    ->directory('health-packages')
                    ->visibility('public')
                    ->disk('public'),

                RichEditor::make('about_intro')->columnSpanFull(),
                RichEditor::make('about_more')->columnSpanFull(),

                ComponentsFieldset::make('SEO')
                    ->schema([
                        TextInput::make('meta_title'),
                        Textarea::make('meta_description'),
                        Textarea::make('meta_keywords'),
                    ]),

                ComponentsSection::make('Package Structure')
                    ->schema([
                        Repeater::make('sections')
                            ->relationship('sections') // Calls the sections() method in Model
                            ->schema([
                                TextInput::make('title')
                                    ->label('Section Title')
                                    ->required(),

                                TextInput::make('sort_order') // Matches migration column
                                    ->numeric()
                                    ->default(0)
                                    ->label('Display Order'),

                                Repeater::make('tests')
                                    ->relationship('tests') // Calls the tests() method in Section Model
                                    ->label('Tests in this Section')
                                    ->schema([
                                        TextInput::make('test_name') // FIXED: Matches migration column
                                            ->label('Test Name')
                                            ->required(),
                                    ])
                                    ->grid(3) // Cleaner layout
                                    ->collapsible()
                                    ->addActionLabel('Add Test'),
                            ])
                            ->collapsible()
                            ->itemLabel(fn(array $state): ?string => $state['title'] ?? null)
                            ->columnSpanFull(),
                    ])
            ]);
    }
}

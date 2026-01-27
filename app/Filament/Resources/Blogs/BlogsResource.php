<?php

namespace App\Filament\Resources\Blogs;

use App\Filament\Resources\Blogs\Pages\CreateBlogs;
use App\Filament\Resources\Blogs\Pages\EditBlogs;
use App\Filament\Resources\Blogs\Pages\ListBlogs;
use App\Filament\Resources\Blogs\Schemas\BlogsForm;
use App\Filament\Resources\Blogs\Tables\BlogsTable;
use App\Models\Blog;
use BackedEnum;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class BlogsResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';




    public static function form(Schema $schema): Schema
    {
        return $schema->components([

            TextInput::make('title')
                ->required()
                ->live(onBlur: true)
                ->afterStateUpdated(fn($state, $set) => $set('slug', Str::slug($state))),

            TextInput::make('slug')
                ->required()
                ->unique(ignoreRecord: true),

            Textarea::make('excerpt')
                ->rows(2)
                ->columnSpanFull(),

           

            FileUpload::make('featured_image')
                ->label('Featured Image')
                ->image()
                ->disk('public')
                ->directory('blogs')
                ->visibility('public')
                ->imageEditor()
                ->moveFiles()
                ->imagePreviewHeight('200')
                ->downloadable()
                ->openable()
                ->required(),

            Toggle::make('is_published')
                ->label('Publish')
                ->default(true),

            DateTimePicker::make('published_at')
                ->label('Publish Date'),

            Section::make('SEO Settings')
                ->components([
                    TextInput::make('meta_title'),
                    Textarea::make('meta_description')->rows(2),
                    TextInput::make('meta_keywords'),
                ])
                ->collapsible(),

            Section::make('Content Builder')
                ->components([

                    Repeater::make('content_blocks')
                        ->label('Page Content')
                        ->schema([

                            Select::make('type')
                                ->options([
                                    'heading' => 'Heading',
                                    'paragraph' => 'Paragraph',
                                    'image' => 'Image',
                                    'list' => 'Bullet List',
                                    'quote' => 'Quote',
                                ])
                                ->required()
                                ->reactive(),

                            TextInput::make('data.text')
                                ->label('Heading Text')
                                ->visible(fn($get) => $get('type') === 'heading'),

                            Textarea::make('data.text')
                                ->label('Paragraph Text')
                                ->rows(4)
                                ->visible(fn($get) => $get('type') === 'paragraph'),

                            FileUpload::make('data.url')
                                ->label('Image')
                                ->directory('blogs')
                                ->image()
                                ->visible(fn($get) => $get('type') === 'image'),

                            TextInput::make('data.caption')
                                ->label('Image Caption')
                                ->visible(fn($get) => $get('type') === 'image'),

                            Repeater::make('data.items')
                                ->label('List Items')
                                ->schema([
                                    TextInput::make('text')->required()
                                ])
                                ->visible(fn($get) => $get('type') === 'list'),

                            Textarea::make('data.text')
                                ->label('Quote Text')
                                ->rows(3)
                                ->visible(fn($get) => $get('type') === 'quote'),

                            TextInput::make('data.author')
                                ->label('Quote Author')
                                ->visible(fn($get) => $get('type') === 'quote'),

                        ])
                        ->collapsible()
                        ->reorderable()
                        ->columnSpanFull(),

                ])
                ->columnSpanFull(),

        ]);
    }


    public static function table(Table $table): Table
    {
        return BlogsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListBlogs::route('/'),
            'create' => CreateBlogs::route('/create'),
            'edit' => EditBlogs::route('/{record}/edit'),
        ];
    }
}

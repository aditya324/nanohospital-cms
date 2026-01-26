<?php

namespace App\Filament\Resources\Doctors;

use App\Filament\Resources\Doctors\Pages\CreateDoctor;
use App\Filament\Resources\Doctors\Pages\EditDoctor;
use App\Filament\Resources\Doctors\Pages\ListDoctors;
use App\Filament\Resources\Doctors\Schemas\DoctorForm;
use App\Filament\Resources\Doctors\Tables\DoctorsTable;
use App\Models\Doctor;
use BackedEnum;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DoctorResource extends Resource
{
    protected static ?string $model = Doctor::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([

            Section::make('Doctor Information')
                ->schema([
                    TextInput::make('name')
                        ->required()
                        ->live(onBlur: true)
                        ->afterStateUpdated(
                            fn($state, $set) =>
                            $set('slug', \Illuminate\Support\Str::slug($state))
                        ),

                    TextInput::make('slug')
                        ->disabled()
                        ->dehydrated(),

                    Select::make('speciality_id')
                        ->relationship('speciality', 'name')
                        ->searchable()
                        ->required(),

                    FileUpload::make('photo')
                        ->image()
                        ->directory('doctors')
                        ->disk('public'),

                    TextInput::make('qualification'),
                    TextInput::make('designation'),
                    TextInput::make('kmc_number'),
                    TextInput::make('experience_years')->numeric(),

                    Select::make('location')
                        ->options([
                            'Both' => 'Both',
                            'Hulimavu' => 'Hulimavu',
                            'Uttarahalli' => 'Uttarahalli',
                        ]),

                    Textarea::make('about')
                        ->rows(6)
                        ->columnSpanFull(),
                ])->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return DoctorsTable::configure($table);
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
            'index' => ListDoctors::route('/'),
            'create' => CreateDoctor::route('/create'),
            'edit' => EditDoctor::route('/{record}/edit'),
        ];
    }
}

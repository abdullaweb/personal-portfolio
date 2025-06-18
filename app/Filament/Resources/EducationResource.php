<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EducationResource\Pages;
use App\Filament\Resources\EducationResource\RelationManagers;
use App\Models\Education;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EducationResource extends Resource
{
    protected static ?string $model = Education::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $navigationGroup = 'Profile';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Education')->schema([
                Select::make('degree')->options([
                    'SSC' => 'SSC',
                    'HSC' => 'HSC',
                    'Diploma' => 'Diploma',
                    'Bachelor' => 'Bachelor',
                    'Master' => 'Master',
                    'PhD' => 'PhD',
                ])->required()->label('Degree'),
                TextInput::make('result')->label('Result')->required(),
                TextInput::make('institute')->required()->label('Institute'),
                TextInput::make('field')->label('Field of Study'),
                TextInput::make('location')->label('Location'),
                TextInput::make('start_year')->numeric()->label('Start Year'),
                TextInput::make('end_year')->numeric()->label('End Year'),
                TextInput::make('passing_year')->numeric()->label('Passing Year'),
                
            ])->columns(2)->columnSpan(2)->collapsed(false),
            Section::make('Details')->schema([
                    Textarea::make('description')->label('Description')->rows(10),
                    Toggle::make('is_current')->label('Currently Studying'),
                ])->columns(1)->columnSpan(1)->collapsed(false),
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('degree')
                    ->label('Degree')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('result')
                    ->label('Result')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('institute')
                    ->label('Institute')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('field')
                    ->label('Field of Study')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListEducation::route('/'),
            'create' => Pages\CreateEducation::route('/create'),
            'edit' => Pages\EditEducation::route('/{record}/edit'),
        ];
    }
}

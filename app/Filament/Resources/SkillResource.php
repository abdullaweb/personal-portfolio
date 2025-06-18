<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SkillResource\Pages;
use App\Filament\Resources\SkillResource\RelationManagers;
use App\Models\Skill;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SkillResource extends Resource
{
    protected static ?string $model = Skill::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationGroup = 'Profile';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Skill Details')->schema([
                    TextInput::make('name')
                        ->required()
                        ->unique(Skill::class, 'name', ignoreRecord: true)
                        ->maxLength(255)
                        ->label('Skill Name'),
                    TextInput::make('category')
                        ->nullable()
                        ->maxLength(255)
                        ->label('Category'),
                    TextInput::make('proficiency')
                        ->numeric()
                        ->default(0)
                        ->label('Proficiency Level (0-100)'),
                    
                    TextInput::make('order')
                        ->numeric()
                        ->nullable()
                        ->label('Display Order'),

                    Toggle::make('is_active')
                        ->default(true)
                        ->label('Active Status'),
                ])->columns(2),
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Skill Name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('category')
                    ->label('Category')
                    ->searchable()    
                    ->sortable(),
                TextColumn::make('proficiency')
                    ->label('Proficiency Level')
                    ->sortable()
                    ->formatStateUsing(fn ($state) => $state . '%'),
                TextColumn::make('is_active')
                    ->label('Active Status')
                    ->sortable()
                    ->formatStateUsing(fn ($state) => $state ? 'Active' : 'Inactive')
                    ->badge(fn ($state) => $state ? 'success' : 'danger'),
                TextColumn::make('order')
                    ->label('Display Order')
                    ->sortable()
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
            'index' => Pages\ListSkills::route('/'),
            'create' => Pages\CreateSkill::route('/create'),
            'edit' => Pages\EditSkill::route('/{record}/edit'),
        ];
    }
}

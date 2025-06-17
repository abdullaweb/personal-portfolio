<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Models\Contact;
use Filament\Forms;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Grid;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Termwind\Components\Span;
use Filament\Tables\Actions;
use Filament\Tables\Actions\DeleteBulkAction;
//Section
use Filament\Forms\Components\Section;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left';

    protected static ?string $navigationGroup = 'Contact';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Contact Info')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->label('Name')
                            ->placeholder('Enter your name'),
                        TextInput::make('email')
                            ->required()
                            ->email()
                            ->maxLength(255)
                            ->label('Email')
                            ->placeholder('Enter your email'),
                        TextInput::make('alternate_email')
                            ->email()
                            ->maxLength(255)
                            ->label('Alternate Email')
                            ->placeholder('Enter your alternate email'),
                        TextInput::make('phone')
                            ->required()
                            ->tel()
                            ->maxLength(20)
                            ->label('Phone')
                            ->placeholder('Enter your phone number'),
                        TextInput::make('alternate_phone')
                            ->tel()
                            ->maxLength(20)
                            ->label('Alternate Phone')
                            ->placeholder('Enter your alternate phone number'),
                        TextInput::make('address')
                            ->required()
                            ->label('Address')
                            ->placeholder('Enter your address'),
                        Textarea::make('message')
                            ->maxLength(1000)
                            ->label('Message')
                            ->placeholder('Enter your message'),
                    ])
                    ->columns(2)->collapsible(),

                Section::make('Social Links')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('facebook')
                                ->url()
                                ->label('Facebook')
                                ->placeholder('Enter your Facebook URL'),
                            TextInput::make('twitter')
                                ->url()
                                ->label('Twitter')
                                ->placeholder('Enter your Twitter URL'),
                            TextInput::make('instagram')
                                ->url()
                                ->label('Instagram')
                                ->placeholder('Enter your Instagram URL'),
                            TextInput::make('linkedin')
                                ->url()
                                ->label('LinkedIn')
                                ->placeholder('Enter your LinkedIn URL'),
                            TextInput::make('youtube')
                                ->url()
                                ->label('YouTube')
                                ->placeholder('Enter your YouTube URL'),
                            TextInput::make('whatsapp')
                                ->url()
                                ->label('WhatsApp')
                                ->placeholder('Enter your WhatsApp URL'),
                            TextInput::make('telegram')
                                ->url()
                                ->label('Telegram')
                                ->placeholder('Enter your Telegram URL'),
                        ]),
                    ])->columns(2)->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([TextColumn::make('name')->searchable()->sortable()->label('Name'), TextColumn::make('email')->searchable()->sortable()->label('Email'), TextColumn::make('phone')->searchable()->sortable()->label('Phone'), TextColumn::make('address')->searchable()->sortable()->label('Address')])

            ->filters([
                //
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
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
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}

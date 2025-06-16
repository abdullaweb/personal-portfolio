<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Category;
use App\Models\Post;
use Dom\Text;
use Faker\Provider\Image;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Actions;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    // page title
    protected static ?string $navigationLabel = 'Posts';
    protected static ?string $navigationGroup = 'Blog';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Create a New Post')
                    ->description('Fill in the details for your new post.')
                    ->schema([
                        TextInput::make('title')->required(),
                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->disableAutocomplete()
                    ->hint('This will be used in the URL.'),
                Select::make('category_id')
                    ->label('Post Category')
                    ->options(
                        Category::all()->pluck('name', 'id')
                    )
                    ->required()
                    ->searchable()
                    ->placeholder('Select a category')
                    ->helperText('Choose a category for your post.'),

                ColorPicker::make('color')
                        ->label('Post Color')
                        ->default('#ffffff')
                        ->required()
                        ->helperText('Choose a color to represent this post.'),

                 MarkdownEditor::make('content')
                    ->label('Post Content')
                    ->required()
                    ->columnSpanFull()
                    ->helperText('Write your post content in Markdown format.'),
                    ])
            ->columnSpan(2)->columns(2),

            Section::make('Meta')
                    ->description('Set additional options for your post.')
                    ->schema([
                

                FileUpload::make('featured_image')
                    ->label('Featured Image')
                    ->image()
                    ->disk('public')
                    ->directory('posts/featured_images')
                    ->visibility('public')
                    ->required()
                    ->helperText('Upload an image to represent this post.'),
                    
               
                TagsInput::make('tags')
                    ->label('Post Tags')
                    ->placeholder('Add tags to categorize your post')
                    ->helperText('Use commas to separate tags.'),
                Checkbox::make('is_published')
                    ->label('Publish Post')
                    ->default(false)
                    ->helperText('Check to publish this post immediately.'),
            ])->columnSpan(1)->columns(1),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('category.name')
                    ->label('Category')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('slug')
                    ->searchable()
                    ->sortable(),
                ColorColumn::make('color')
                    ->label('Color')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
                ImageColumn::make('featured_image')
                    ->label('Featured Image'),
                TextColumn::make('tags')
                    ->label('Tags'),
                CheckboxColumn::make('is_published')
                    ->label('Published')
                    ->sortable()
                    ->toggleable(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\DeleteAction;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationLabel = 'Blog & Awards';
    protected static ?string $modelLabel = 'Post';
    protected static ?string $pluralModelLabel = 'Blog & Awards';
    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Post Details')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->reactive()
                            ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->helperText('Auto-generated from title. Edit manually if needed.'),
                        Forms\Components\Select::make('type')
                            ->required()
                            ->options([
                                'blog' => 'Blog Post',
                                'award' => 'Award',
                            ])
                            ->default('blog'),
                        Forms\Components\Textarea::make('content')
                            ->rows(5)
                            ->nullable(),
                        Forms\Components\DatePicker::make('date')
                            ->label('Published / Award Date')
                            ->nullable(),
                        Forms\Components\TextInput::make('url')
                            ->url()
                            ->maxLength(255)
                            ->placeholder('https://...')
                            ->label('External Link (optional)'),
                    ])->columns(2),

                Forms\Components\Section::make('Media & Settings')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->image()
                            ->directory('posts')
                            ->nullable(),
                        Forms\Components\TextInput::make('sort_order')
                            ->numeric()
                            ->default(0)
                            ->label('Sort Order'),
                        Forms\Components\Toggle::make('is_visible')
                            ->default(true)
                            ->label('Visible on Website'),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->limit(40),
                Tables\Columns\TextColumn::make('type')
                    ->badge()
                    ->colors([
                        'primary' => 'blog',
                        'success' => 'award',
                    ])
                    ->formatStateUsing(fn ($state) => $state === 'blog' ? 'Blog' : 'Award'),
                Tables\Columns\TextColumn::make('date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sort_order')
                    ->sortable()
                    ->label('Order'),
                Tables\Columns\IconColumn::make('is_visible')
                    ->boolean()
                    ->label('Visible'),
            ])
            ->defaultSort('date', 'desc')
            ->actions([
                Tables\Actions\EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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

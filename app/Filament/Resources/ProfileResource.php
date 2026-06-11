<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfileResource\Pages;
use App\Models\Profile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\DeleteAction;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;
    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationLabel = 'Profile';
    protected static ?string $modelLabel = 'Profile';
    protected static ?string $pluralModelLabel = 'Profiles';
    protected static ?string $createButtonLabel = 'Create Profile';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Personal Information')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->placeholder('Enter your name')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('title')
                            ->placeholder('e.g., Full Stack Developer')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('email')
                            ->email()
                            ->placeholder('email@example.com')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('phone')
                            ->tel()
                            ->placeholder('+1 234 567 890')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('location')
                            ->placeholder('City, Country')
                            ->maxLength(255),
                    ])->columns(2),

                Forms\Components\Section::make('Biography')
                    ->schema([
                        Forms\Components\Textarea::make('short_bio')
                            ->placeholder('A brief description about yourself')
                            ->rows(3)
                            ->maxLength(500),
                        Forms\Components\RichEditor::make('full_bio')
                            ->placeholder('Write your full biography here...')
                            ->maxLength(5000),
                    ]),

                Forms\Components\Section::make('Photo')
                    ->schema([
                        Forms\Components\FileUpload::make('photo')
                            ->image()
                            ->directory('profile')
                            ->placeholder('Upload your profile photo'),
                    ]),

                Forms\Components\Section::make('Social Links')
                    ->schema([
                        Forms\Components\TextInput::make('github_url')
                            ->url()
                            ->prefix('https://')
                            ->placeholder('github.com/username'),
                        Forms\Components\TextInput::make('facebook_url')
                            ->url()
                            ->prefix('https://')
                            ->placeholder('facebook.com/username'),
                        Forms\Components\TextInput::make('linkedin_url')
                            ->url()
                            ->prefix('https://')
                            ->placeholder('linkedin.com/in/username'),
                        Forms\Components\TextInput::make('twitter_url')
                            ->url()
                            ->prefix('https://')
                            ->placeholder('twitter.com/username'),
                        Forms\Components\TextInput::make('resume_url')
                            ->url()
                            ->placeholder('Link to your resume'),
                    ])->columns(2),

                Forms\Components\Section::make('Settings')
                    ->schema([
                        Forms\Components\Toggle::make('is_visible')
                            ->label('Show on Website')
                            ->default(true),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo'),
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\IconColumn::make('is_visible')->boolean(),
                Tables\Columns\TextColumn::make('created_at')->dateTime(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                DeleteAction::make(),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}
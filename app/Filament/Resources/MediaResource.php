<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Media;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\MediaResource\Pages\EditMedia;
use App\Filament\Resources\MediaResource\Pages\ListMedia;
use App\Filament\Resources\MediaResource\Pages\CreateMedia;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class MediaResource extends Resource
{
    protected static ?string $model = Media::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255),
                            
                        Forms\Components\Select::make('type')
                            ->options([
                                'image' => 'Image',
                                'youtube' => 'YouTube Video'
                            ])
                            ->required()
                            ->reactive(),
                            
                            SpatieMediaLibraryFileUpload::make('gallery')
                            ->collection('gallery')
                            ->image()
                            ->imageEditor()
                            ->openable()
                            ->downloadable()
                            ->multiple()
                            ->responsiveImages()
                            ->visible(fn ($get) => $get('type') === 'image'),
                            
                        Forms\Components\TextInput::make('youtube_url')
                            ->label('YouTube URL')
                            ->required()
                            ->visible(fn ($get) => $get('type') === 'youtube')
                            ->afterStateUpdated(function ($state, callable $set) {
                                $youtubeId = Media::getYoutubeId($state);
                                if ($youtubeId) {
                                    $set('path', $youtubeId);
                                }
                            }),
                            
                        Forms\Components\Select::make('category_id')
                            ->relationship('category', 'name')
                            ->required(),
                            
                        Forms\Components\TextInput::make('alt_text')
                            ->maxLength(255),
                            
                        Forms\Components\Textarea::make('description')
                            ->rows(3)
                            ->maxLength(500),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('type')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'youtube' => 'danger',
                        'image' => 'success',
                        default => 'gray',
                    }),
                    
                Tables\Columns\TextColumn::make('category.name')
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                    ->options([
                        'youtube' => 'YouTube',
                        'image' => 'Image',
                    ]),
                    
                Tables\Filters\SelectFilter::make('category')
                    ->relationship('category', 'name'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
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
            'index' => ListMedia::route('/'),
            'create' => CreateMedia::route('/create'),
            'edit' => EditMedia::route('/{record}/edit'),
        ];
    }
    
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withCount('category')
            ->latest();
    }
}
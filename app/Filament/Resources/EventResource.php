<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Pages\EditEvent;
use App\Models\Event;
use Pages\ListEvents;
use Pages\CreateEvent;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\MediaResource\Pages\EditMedia;
use App\Filament\Resources\MediaResource\Pages\ListMedia;
use App\Filament\Resources\MediaResource\Pages\CreateMedia;


class EventResource extends Resource
{
    protected static ?string $model = Event::class;
    protected static ?string $navigationIcon = 'heroicon-o-calendar';
    protected static ?string $modelLabel = 'Eveniment';
    protected static ?string $pluralModelLabel = 'Evenimente';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Titlu')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\DateTimePicker::make('date')
                            ->label('Data și ora')
                            ->required()
                            ->format('d/m/Y H:i'),

                        Forms\Components\TextInput::make('location')
                            ->label('Locație')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\RichEditor::make('description')
                            ->label('Descriere')
                            ->required()
                            ->columnSpanFull(),

                        Forms\Components\TextInput::make('ticket_link')
                            ->label('Link bilete')
                            ->url()
                            ->maxLength(255),

                        Forms\Components\Toggle::make('is_featured')
                            ->label('Eveniment evidențiat')
                            ->default(false),
                    ])
                    ->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Titlu')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('date')
                    ->label('Data')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('location')
                    ->label('Locație')
                    ->searchable(),
                    
                Tables\Columns\IconColumn::make('is_featured')
                    ->label('Evidențiat')
                    ->boolean(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Creat la')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\Filter::make('upcoming')
                    ->label('Evenimente viitoare')
                    ->query(fn (Builder $query): Builder => $query->where('date', '>=', now())),
                    
                Tables\Filters\Filter::make('featured')
                    ->label('Evenimente evidențiate')
                    ->query(fn (Builder $query): Builder => $query->where('is_featured', true))
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
            ->defaultSort('date', 'asc');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('date', '>=', now())->count();
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->latest('date');
    }

    public static function getPages(): array
    {
        return [
            'index' => ListMedia::route('/'),
            'create' => CreateMedia::route('/create'),
            'edit' => EditMedia::route('/{record}/edit'),
        ];
    }
}
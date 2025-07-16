<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\CheckoutQueueResource\Pages;
use App\Filament\Admin\Resources\CheckoutQueueResource\RelationManagers;
use App\Models\CheckoutQueue;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CheckoutQueueResource extends Resource
{
    protected static ?string $model = CheckoutQueue::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('task_id')
                    ->required()
                    ->numeric(),
                Forms\Components\DateTimePicker::make('queued_at')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('task_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('queued_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListCheckoutQueues::route('/'),
            'create' => Pages\CreateCheckoutQueue::route('/create'),
            'edit' => Pages\EditCheckoutQueue::route('/{record}/edit'),
        ];
    }
}

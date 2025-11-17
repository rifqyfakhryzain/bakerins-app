<?php

namespace App\Filament\Resources\Products\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('name')
                ->label('Product Name')
                ->searchable()
                ->sortable(),

                Tables\Columns\TextColumn::make('category.name')
                ->label('Category')
                ->sortable(),

                Tables\Columns\TextColumn::make('price')
                ->label('Price')
                ->money('IDR')
                ->sortable(),

                Tables\Columns\TextColumn::make('description')
                ->label('Description')
                ->limit(50)
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}

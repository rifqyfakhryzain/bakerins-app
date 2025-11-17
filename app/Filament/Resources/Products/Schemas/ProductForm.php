<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Schemas\Schema;
use Livewire\Form;
use Filament\Forms;
class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                Forms\Components\TextINput::make('name')
                ->label('Product Name')
                ->required()
                ->maxLength(255),

                Forms\Components\Select::make('category_id')
                ->label('Category')
                ->options(
                    \App\Models\Category::query()
                    ->pluck('name', 'id')
                )
                ->searchable()
                ->native(false)
                ->required(),

                Forms\Components\TextINput::make('price')
                ->numeric()
                ->required(),

                Forms\Components\Textarea::make('description')
                ->rows(3),
            ]);
    }
}

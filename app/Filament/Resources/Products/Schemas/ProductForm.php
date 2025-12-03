<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Forms\Components\TextInput::make('name')
                    ->label('Product Name')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Select::make('category_id')
                    ->label('Category')
                    ->options(
                        \App\Models\Category::query()->pluck('name', 'id')
                    )
                    ->searchable()
                    ->native(false)
                    ->required(),

                Forms\Components\TextInput::make('price')
                    ->numeric()
                    ->required(),

                Forms\Components\Textarea::make('description')
                    ->rows(3),

FileUpload::make('image')
    ->label('Product Image')
    ->disk('public')
    ->directory('products')
    ->visibility('public')
    ->image()
    ->previewable(false)     // ✅ WAJIB
    ->openable(false)        // ✅ WAJIB
    ->downloadable(false)   // ✅ WAJIB
    ->maxSize(2048)
    ->required()

            ]);
    }
}

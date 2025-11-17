<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Schemas\Schema;
use Livewire\Form;
use Filament\Forms;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                Forms\Components\TextInput::make('name')
                ->label('Category Name')
                ->required()
                ->maxLength(255),

                Forms\Components\TextInput::make('slug')
                ->label('Slug')
                ->required()
                ->maxLength(255),

                Forms\Components\Textarea::make('desciption')
                ->label('Description')
                ->rows(3),
            ]);
    }
}

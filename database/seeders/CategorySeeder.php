<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Es',
            'slug' => 'es',
            'description' => 'Aneka es',
        ]);

        Category::create([
            'name' => 'Cake',
            'slug' => 'cake',
            'description' => 'Aneka Bolu',
        ]);

        Category::create([
            'name' => 'Kue Basah',
            'slug' => 'kue basah',
            'description' => 'Aneka kue basah',
        ]);

        Category::create([
            'name' => 'Snack',
            'slug' => 'snack',
            'description' => 'Aneka kue snack',
        ]);

        


    }
}

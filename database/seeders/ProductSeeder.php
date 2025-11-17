<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Product::create([
            'category_id'  => 1,
            'name' => 'Es Jeruk',
            'price' => 1000,
            'description' => 'Es jeruk yang segar mantap'
        ]);

        Product::create([
            'category_id'  => 1,
            'name' => 'Es Matcha',
            'price' => 1000,
            'description' => 'Es Matcha yang segar mantap'
        ]);

        Product::create([
            'category_id'  => 1,
            'name' => 'ES Cappucino',
            'price' => 1000,
            'description' => 'Es Cappucino yang segar mantap'
        ]);

        Product::create([
            'category_id'  => 2,
            'name' => 'Bolu Pisang',
            'price' => 50000,
            'description' => 'Bolu pisang yang banyak topping nya'
        ]);

        Product::create([
            'category_id'  => 2,
            'name' => 'Brownies',
            'price' => 50000,
            'description' => 'Brownies yang lumer mantap pokoknya'
        ]);
    }
}

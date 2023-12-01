<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample product data
        $products = [
            [
                'name' => 'Product 1',
                'image' => 'product1.jpg',
                'user_id' => 1,
                'amount' => 100,
                'description' => 'Description for Product 1.',
            ],
            [
                'name' => 'Product 2',
                'image' => 'product2.jpg',
                'user_id' => 1,
                'amount' => 150,
                'description' => 'Description for Product 2.',
            ],
            // Add more products as needed
        ];

        // Insert the sample data into the 'products' table
        DB::table('products')->insert($products);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Product A',
                'quantity' => 10,
                'price' => 19.99,
            ],
            [
                'name' => 'Product B',
                'quantity' => 5,
                'price' => 29.99,
            ],

        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Images;
use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Products::factory()->times(20)->create()->each(function ($product) {
            Images::factory(4)->create(["product_id" => $product->id]);
        });
    }
}

<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'Dji Sam Soe', 'product_category' => 'Rokok', 'description' => 'Ini adalah rokok Dji Sam Soe'],
            ['name' => 'Paracetamol', 'product_category' => 'Obat', 'description' => 'Ini adalah obat pereda demam'],
            ['name' => 'Generic Product', 'product_category' => 'Lainnya', 'description' => 'Produk lainnya yang generic'],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}

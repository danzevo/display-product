<?php

namespace Database\Seeders;

use App\Models\Price;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prices = [
            ['product_id' => 1, 'unit' => 'bungkus'],
            ['product_id' => 2, 'unit' => 'strip'],
            ['product_id' => 3, 'unit' => 'paket'],
        ];

        foreach ($prices as $price) {
            Price::create($price);
        }
    }
}

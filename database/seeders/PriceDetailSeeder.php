<?php

namespace Database\Seeders;

use App\Models\PriceDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PriceDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $priceDetails = [
            ['price_id' => 1, 'tier' => 'Non Member', 'price' => 20000],
            ['price_id' => 1, 'tier' => 'Basic', 'price' => 22000],
            ['price_id' => 1, 'tier' => 'Premium', 'price' => 24000],
            ['price_id' => 2, 'tier' => 'Non Member', 'price' => 5000],
            ['price_id' => 2, 'tier' => 'Basic', 'price' => 7000],
            ['price_id' => 2, 'tier' => 'Premium', 'price' => 9000],
        ];

        foreach ($priceDetails as $detail) {
            PriceDetail::create($detail);
        }
    }
}

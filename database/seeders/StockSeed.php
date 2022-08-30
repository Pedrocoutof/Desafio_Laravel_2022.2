<?php

namespace Database\Seeders;

use App\Models\Product;
use Database\Factories\StockFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stock;

class StockSeed extends Seeder
{
    public function run()
    {
        $allProduct = Product::all();
        $counter = 0;
        foreach ($allProduct as $item) {
            $counter ++;
        }
        Stock::factory($counter)->create();
    }
}

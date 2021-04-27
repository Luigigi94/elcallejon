<?php

namespace Database\Seeders;

use App\Models\Board;
use App\Models\Category;
use App\Models\Commands;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Savings;
use App\Models\Tills;
use Database\Factories\StatusesFactory;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductImage::factory()
            ->count(20)
            ->create();
        Board::factory()
            ->count(10)
            ->create();
    }
}

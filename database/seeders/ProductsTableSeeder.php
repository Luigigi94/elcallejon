<?php

namespace Database\Seeders;

use App\Models\Board;
use App\Models\Category;
use App\Models\Commands;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Savings;
use App\Models\Tills;
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
        Category::factory()
            ->count(5)
            ->create();
        Product::factory()
            ->count(10)
            ->create();
        ProductImage::factory()
            ->count(20)
            ->create();
        Board::factory()
            ->count(10)
            ->create();
        Savings::factory()
            ->count(5)
            ->create();
        Commands::factory()
            ->count(20)
            ->create();
        Tills::factory()
            ->count(10)
            ->create();
    }
}

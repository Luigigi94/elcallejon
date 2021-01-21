<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Database\Factories\CategoryFactory;
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
//        Category::factory()
//            ->count(10)
//            ->create();
//        Product::factory()
//            ->count(50)
//            ->create();
//        ProductImage::factory()
//            ->count(200)
//            ->create();
//        $Products = Category::

        $categories = factory(Category::class, 5)->create();
        $categories->each(function ($category){
           $products = factory(Product::class, 20)->make();
           $category->products()->save($products);

           $products->each(function ($p){
              $images = factory(ProductImage::class, 5)->make();
              $p->images()->save($images);
           });
        });
    }
}

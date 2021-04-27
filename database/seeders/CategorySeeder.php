<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories =[
            [
                'name' => 'Hamburguesas',
                'description' => 'Hamburguesas',
                'image' => 'https://www.facebook.com/DeliciaCoatepec/photos/131627225638745'
            ],
            [
                'name' => 'Jochos',
                'description' => 'Hotdogs',
                'image' => 'https://www.superama.com.mx/views/micrositio/recetas/images/backtoschool/hotdogs/Web_fotoreceta.jpg'
            ],
            [
                'name' => 'Papas',
                'description' => 'Hamburguesas y Jochos con papas',
                'image' => 'https://www.facebook.com/DeliciaCoatepec/photos/131952575606210'
            ],
            [
                'name' => 'Pastas',
                'description' => 'Pastas',
                'image' => 'https://d1uz88p17r663j.cloudfront.net/resized/89f3579450ccc5b93518f843e810e233_fussili_con_pollo_1_1200_600.jpg'
            ],
            [
                'name' => 'Ensaladas',
                'description' => 'Ensaladas',
                'image' => 'https://www.comedera.com/wp-content/uploads/2015/10/ensalada-de-pollo.jpg'
            ],
            [
                'name' => 'Snacks',
                'description' => 'Snacks',
                'image' => 'https://www.sensoryvalue.com/wp-content/uploads/2018/04/24_04-768x512.png'
            ],
            [
                'name' => 'Postres',
                'description' => 'Postres',
                'image' => 'https://i.ytimg.com/vi/2_FUW8y2J1M/maxresdefault.jpg'
            ],
            [
                'name' => 'Bebidas',
                'description' => 'Bebidas',
                'image' => 'https://d1uz88p17r663j.cloudfront.net/original/65106099693f2073b5531828ea560b67_LIMONADA_BRASILE%C3%91A.jpg'
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'MATAHAMBRE',
                'description' => '300 g de res',
                'long_description' => 'Queso manchego, queso americano (original), cebolla caramelizada, pepinillos, Tocino, Aderezo deli',
                'price' => '90',
                'category_id' => '1'
            ],
            [
                'name' => 'KEESE A CHEESE',
                'description' => '200 g de res',
                'long_description' => 'Queso manchego, Aderezo deli Bañada en salsa de queso',
                'price' => '70',
                'category_id' => '1'
            ],
            [
                'name' => 'SIN NOMBRE',
                'description' => '150 g de res',
                'long_description' => 'Rellena de queso oaxaca, Queso manchego, tocino, jalapeños toreados, lechuga, jitomate',
                'price' => '60',
                'category_id' => '1'
            ],
            [
                'name' => 'TROPICAL',
                'description' => '150 g de res',
                'long_description' => 'Queso manchego, Tocino, queso oaxaca, piña asada, salsa BBQ, lechuga',
                'price' => '55',
                'category_id' => '1'
            ],
            [
                'name' => 'CRUNCH',
                'description' => '150 g de res',
                'long_description' => 'Aros de cebolla, Queso manchego, piña asada, salsa BBQ, lechuga',
                'price' => '55',
                'category_id' => '1'
            ],
            [
                'name' => 'HUEVO',
                'description' => '150 g de res',
                'long_description' => 'Huevo estrellado, Queso Manchego, lechuga, tocino',
                'price' => '50',
                'category_id' => '1'
            ],
            [
                'name' => 'AMERICANA',
                'description' => '150 g de res',
                'long_description' => 'Doble americano, jitomate, cebolla morada, lechuga',
                'price' => '50',
                'category_id' => '1'
            ],
            [
                'name' => 'JALAPEÑA',
                'description' => '150 g de res',
                'long_description' => 'Queso manchego, champiñones, jalapeño toreado, cebolla asada, lechuga',
                'price' => '50',
                'category_id' => '1'
            ],
            [
                'name' => 'MATAHAMBRE',
                'description' => '300 g de res con papas',
                'long_description' => 'Queso manchego, queso americano (original), cebolla caramelizada, pepinillos, Tocino, Aderezo deli',
                'price' => '100',
                'category_id' => '3'
            ],
            [
                'name' => 'KEESE A CHEESE',
                'description' => '200 g de res con papas',
                'long_description' => 'Queso manchego, Aderezo deli Bañada en salsa de queso',
                'price' => '80',
                'category_id' => '3'
            ],
            [
                'name' => 'SIN NOMBRE',
                'description' => '150 g de res con papas',
                'long_description' => 'Rellena de queso oaxaca, Queso manchego, tocino, jalapeños toreados, lechuga, jitomate',
                'price' => '70',
                'category_id' => '3'
            ],
            [
                'name' => 'TROPICAL',
                'description' => '150 g de res con papas',
                'long_description' => 'Queso manchego, Tocino, queso oaxaca, piña asada, salsa BBQ, lechuga',
                'price' => '65',
                'category_id' => '3'
            ],
            [
                'name' => 'CRUNCH',
                'description' => '150 g de res con papas',
                'long_description' => 'Aros de cebolla, Queso manchego, piña asada, salsa BBQ, lechuga',
                'price' => '65',
                'category_id' => '3'
            ],
            [
                'name' => 'HUEVO',
                'description' => '150 g de res con papas',
                'long_description' => 'Huevo estrellado, Queso Manchego, lechuga, tocino',
                'price' => '60',
                'category_id' => '3'
            ],
            [
                'name' => 'AMERICANA',
                'description' => '150 g de res con papas',
                'long_description' => 'Doble americano, jitomate, cebolla morada, lechuga',
                'price' => '60',
                'category_id' => '3'
            ],
            [
                'name' => 'JALAPEÑA',
                'description' => '150 g de res con papas',
                'long_description' => 'Queso manchego, champiñones, jalapeño toreado, cebolla asada, lechuga',
                'price' => '60',
                'category_id' => '3'
            ],
            [
                'name' => 'BACON',
                'description' => 'Salchicha 22 cm',
                'long_description' => 'Tocino, cebolla asada, queso manchego, jalapeños',
                'price' => '45',
                'category_id' => '2'
            ],
            [
                'name' => 'BACON',
                'description' => 'Salchicha 22 cm con papas',
                'long_description' => 'Tocino, cebolla asada, queso manchego, jalapeños',
                'price' => '55',
                'category_id' => '3'
            ],
            [
                'name' => 'CHAMPIÑON',
                'description' => 'Salchicha 22 cm',
                'long_description' => 'Champiñon, jalapeños toreados, queso manchego',
                'price' => '45',
                'category_id' => '2'
            ],
            [
                'name' => 'CHAMPIÑON',
                'description' => 'Salchicha 22 cm con papas',
                'long_description' => 'Champiñon, jalapeños toreados, queso manchego',
                'price' => '55',
                'category_id' => '3'
            ],
            [
                'name' => 'MACARRON',
                'description' => 'Salchicha 22 cm',
                'long_description' => 'Macarrones con queso, tocino',
                'price' => '50',
                'category_id' => '2'
            ],
            [
                'name' => 'MACARRON',
                'description' => 'Salchicha 22 cm',
                'long_description' => 'Macarrones con queso, tocino',
                'price' => '60',
                'category_id' => '3'
            ],
            [
                'name' => 'ARRABBITA',
                'description' => 'Pasta Penne',
                'long_description' => 'Salsa arrabbita, cherry, tocino, parmesano, perejil',
                'price' => '45',
                'category_id' => '4'
            ],
            [
                'name' => 'DIABLA',
                'description' => 'Pasta Penne',
                'long_description' => 'Salsa de chipotle, cebolla, tocino, parmesano, pechuga',
                'price' => '45',
                'category_id' => '4'
            ],
            [
                'name' => 'POLLO',
                'description' => 'Pasta Penne',
                'long_description' => 'Pollo, nuez, crema, parmesano',
                'price' => '45',
                'category_id' => '4'
            ],
            [
                'name' => 'CESAR',
                'description' => 'Lechuga',
                'long_description' => 'Pechuga asada, crotones, parmesano, aderezo cesar',
                'price' => '45',
                'category_id' => '5'
            ],
            [
                'name' => 'POLLO',
                'description' => 'Lechuga',
                'long_description' => 'Pechuga, pimiento, cebolla morada, cherry, queso panela, almendra fileteada y tostada ad ranch',
                'price' => '45',
                'category_id' => '5'
            ],
            [
                'name' => 'FRESA',
                'description' => 'Lechuga',
                'long_description' => 'Zanahoria, fresa, queso de cabra, pepita caramelizada, arandanos, vinagreta de balsamico',
                'price' => '45',
                'category_id' => '5'
            ],
            [
                'name' => 'DEDOS DE QUESO',
                'description' => '5 piezas',
                'long_description' => 'Aderezo a elegir (Habanero, Chile seco, Chipotle, Ranch, Mango, BBQ), bastones de apio y zanahoria',
                'price' => '45',
                'category_id' => '6'
            ],
            [
                'name' => 'NACHOS CLASICOS',
                'description' => 'Queso',
                'long_description' => 'Rajas en vinagre, Totopos de maiz',
                'price' => '35',
                'category_id' => '6'
            ],
            [
                'name' => 'AROS DE CEBOLLA',
                'description' => '10 piezas',
                'long_description' => 'Aderezo a elegir (Habanero, Chile seco, Chipotle, Ranch, Mango, BBQ)',
                'price' => '45',
                'category_id' => '6'
            ],
            [
                'name' => 'FRANCESAS',
                'description' => '200 gramos',
                'long_description' => 'Naturales',
                'price' => '35',
                'category_id' => '6'
            ],
            [
                'name' => 'BROWNIE',
                'description' => 'Helado',
                'long_description' => 'dulce de leche, nuez',
                'price' => '40',
                'category_id' => '7'
            ],
            [
                'name' => 'CREPA PLATANO',
                'description' => 'Queso crema',
                'long_description' => 'Platano, mantequilla de mani, helado, dulce de leche',
                'price' => '35',
                'category_id' => '7'
            ],
            [
                'name' => 'MINI HOT-CAKE CON FRESA',
                'description' => '10 piezas',
                'long_description' => 'Crema batida, fresas',
                'price' => '35',
                'category_id' => '7'
            ],
            [
                'name' => 'PAN ELOTE',
                'description' => 'pan de elote',
                'long_description' => 'pan de elote',
                'price' => '25',
                'category_id' => '7'
            ],
            [
                'name' => 'AMERICANO',
                'description' => 'Bebida Caliente',
                'long_description' => '',
                'price' => '25',
                'category_id' => '8'
            ],
            [
                'name' => 'CAPUCHINO',
                'description' => 'Bebida Caliente',
                'long_description' => '',
                'price' => '30',
                'category_id' => '8'
            ],
            [
                'name' => 'CHOCOLATE',
                'description' => 'Bebida Caliente',
                'long_description' => 'con bombones',
                'price' => '30',
                'category_id' => '8'
            ],
            [
                'name' => 'LIMONADA',
                'description' => 'Bebida fria',
                'long_description' => '',
                'price' => '20',
                'category_id' => '8'
            ],
            [
                'name' => 'NARANJADA',
                'description' => 'Bebida fria',
                'long_description' => '',
                'price' => '20',
                'category_id' => '8'
            ],
            [
                'name' => 'COCA-COLA',
                'description' => 'Bebida fria',
                'long_description' => '',
                'price' => '25',
                'category_id' => '8'
            ],
            [
                'name' => 'VAINILLA',
                'description' => 'Malteada',
                'long_description' => 'Incluye Crema Batida',
                'price' => '30',
                'category_id' => '8'
            ],
            [
                'name' => 'CHOCOLATE',
                'description' => 'Malteada',
                'long_description' => 'Incluye Crema Batida',
                'price' => '30',
                'category_id' => '8'
            ],
            [
                'name' => 'OREO',
                'description' => 'Malteada',
                'long_description' => 'Incluye Crema Batida',
                'price' => '35',
                'category_id' => '8'
            ],
            [
                'name' => 'FRESA',
                'description' => 'Malteada',
                'long_description' => 'Incluye Crema Batida',
                'price' => '30',
                'category_id' => '8'
            ],
            [
                'name' => 'MANGO',
                'description' => 'Frappe',
                'long_description' => 'Incluye crema batida',
                'price' => '35',
                'category_id' => '8'
            ],
            [
                'name' => 'FRESA',
                'description' => 'Frappe',
                'long_description' => 'Incluye crema batida',
                'price' => '35',
                'category_id' => '8'
            ],
            [
                'name' => 'CHAMOLLADA DE MANGO',
                'description' => 'Frappe',
                'long_description' => 'Incluye crema batida',
                'price' => '30',
                'category_id' => '8'
            ],
            [
                'name' => 'BERRIES',
                'description' => 'Te helado',
                'long_description' => '',
                'price' => '30',
                'category_id' => '8'
            ],
            [
                'name' => 'LIMON',
                'description' => 'Te helado',
                'long_description' => '',
                'price' => '25',
                'category_id' => '8'
            ],
            [
                'name' => 'MANGO',
                'description' => 'Te helado',
                'long_description' => '',
                'price' => '25',
                'category_id' => '8'
            ],
            [
                'name' => 'TAILANDES',
                'description' => 'Te helado',
                'long_description' => '',
                'price' => '30',
                'category_id' => '8'
            ],
            [
                'name' => 'MANZANILLA',
                'description' => 'Te caliente',
                'long_description' => '',
                'price' => '20',
                'category_id' => '8'
            ],
            [
                'name' => 'NEGRO',
                'description' => 'Te caliente',
                'long_description' => '',
                'price' => '20',
                'category_id' => '8'
            ],
        ];
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}

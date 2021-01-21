<?php

//namespace Database\Factories;
///**  @var \Illuminate\Database\Eloquent\Factory $factory*/

$factory = Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\ProductImage;

$factory->define(ProductImage::class, function (Faker $faker){
    return [
            'image'=> $this->faker->imageUrl(250,250),
            'products_id' => $this->faker->numberBetween(1,100)
        ];
});

//class ProductImageFactory extends Factory
//{
//    /**
//     * The name of the factory's corresponding model.
//     *
//     * @var string
//     */
//    protected $model = ProductImage::class;
//
//    /**
//     * Define the model's default state.
//     *
//     * @return array
//     */
//    public function definition()
//    {
//        return [
//            'image'=> $this->faker->imageUrl(250,250),
//            'products_id' => $this->faker->numberBetween(1,100)
//        ];
//    }
//}

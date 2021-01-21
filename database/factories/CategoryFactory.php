<?php

//namespace Database\Factories;
///**  @var \Illuminate\Database\Eloquent\Factory $factory*/

$factory = Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\Category;


$factory->define(Category::class, function (Faker $faker){
    return [
        'name' => ucfirst($faker->word),
        'description' => $faker->sentence(10),
        'image' => $faker->imageUrl(255,255)
    ];
});
 /*
class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     *//*
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     *//*
    public function definition()
    {
        return [
            'name' => ucfirst($faker->word),
            'description' => $faker->sentence(10),
            'image' => $faker->imageUrl(255,255)
        ];
    }
}
*/

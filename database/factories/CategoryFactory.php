<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory ;

use App\Models\Category;


class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => ucfirst($this->faker->word),
            'description' => $this->faker->sentence(10),
            'image' => $this->faker->imageUrl(255, 255)
        ];
    }

}


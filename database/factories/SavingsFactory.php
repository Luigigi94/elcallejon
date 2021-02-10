<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Savings;
use Illuminate\Database\Eloquent\Factories\Factory;

class SavingsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Savings::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'users_id' => $this->faker->numberBetween(1,2),
            'quantity' => $this->faker->randomNumber(5)
        ];
    }
}

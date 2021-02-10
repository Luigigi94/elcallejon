<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Tills;
use Illuminate\Database\Eloquent\Factories\Factory;

class TillsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tills::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    //id 	total 	created_at 	updated_at 	command_id 	user_id

    public function definition()
    {
        return [
            'total' => $this->faker->randomFloat(3,150,10000),
            'command_id' => $this->faker->numberBetween(1,20),
            'user_id' => 1
        ];
    }
}

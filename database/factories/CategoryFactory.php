<?php

use Faker\Generator as Faker;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factory;

$factory = app(Factory::class);

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => ucfirst($faker->word),
        'description' => $faker->sentence(10),
        'image' => $faker->imageUrl(255,255)
    ];
});
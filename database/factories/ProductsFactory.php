<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 * @method static factory()
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create();

        $randomSale = rand(0, 1) ? null : $faker->numberBetween(0, 1000);

        return [
            "name" => $faker->unique()->name,
            "type" => $faker->unique()->name,
            "category" => $faker->numberBetween(0, 10),
            "likes" => $faker->numberBetween(0, 1000),
            "price" => $randomSale,
            "old_price" => $faker->numberBetween(0, 1000),
            "code" => $faker->numberBetween(0, 100000),
            "producer" => $faker->company,
            "image" => $faker->imageUrl,
            "color" => $faker->colorName,
            "description" => $faker->text(333),
        ];
    }
}

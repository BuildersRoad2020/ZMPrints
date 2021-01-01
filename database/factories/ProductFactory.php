<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'user_id' => User::factory(),
            'name' => $this->faker->word,
            'rate' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 1000), // 48.8932            ,
            'details' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'quantity' => $this->faker->randomNumber,
        ];
    }
}

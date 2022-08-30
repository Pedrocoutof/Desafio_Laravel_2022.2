<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stock>
 */
class StockFactory extends Factory
{
    public function definition()
    {
        return [
            'produto' => rand(1, 19),
            'quantidade' => $this->faker->numberBetween(0, 100),

        ];
    }
}

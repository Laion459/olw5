<?php

namespace Database\Factories;

use App\Models\image;
use App\Models\Sku;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sku_id' => Sku::factory(),
            'url' => fake()->imageUrl(),
            'cover' => fake()->boolean()
        ];
    }
}

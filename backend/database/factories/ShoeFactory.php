<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shoe>
 */
class ShoeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $collections = [
            'Collection Capsule A - Rouge' => 'red',
            'Collection Capsule A - Bleu' => 'blue',
            'Collection Capsule A - Noir' => 'black',
            'Collection GTA VI - Bleu' => 'blue',
        ];

        $images = [
            'Collection Capsule A - Rouge' => 'red.jpg',
            'Collection Capsule A - Bleu' => 'blue.jpg',
            'Collection Capsule A - Noir' => 'black.jpg',
            'Collection GTA VI - Bleu' => 'gta.jpg',
        ];

        $collection = $this->faker->randomElement(array_keys($collections));
        $color = $collections[$collection];
        $image = $images[$collection];

        return [
            'name' => $collection,
            'description' => $this->faker->sentence,
            'price' => 150.00,
            'collection' => $collection,
            'size' => $this->faker->numberBetween(7, 12),
            'color' => $color,
            'image' => $image,
            'state' => $this->faker->boolean,
        ];
    }
}

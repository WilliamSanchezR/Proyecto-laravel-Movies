<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pelicula>
 */
class PeliculaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(3),
            'director' => $ $this->faker->name(),
            'anio' => $ $this->faker->year(),
            'calidad' => $ $this->faker->randomElement(['4k', '1080p', '720']),
            'sinopsis' => $ $this->faker->paragraph(),
        ];
    }
}

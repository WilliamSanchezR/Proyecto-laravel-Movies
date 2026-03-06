<?php

namespace Database\Factories;

use App\Models\categorias;
use App\Models\peliculas;
use Illuminate\Database\Eloquent\Factories\Factory;

class PeliculaFactory extends Factory
{
    protected $model = peliculas::class;

    public function definition(): array
    {
        $faker = \Faker\Factory::create('es_ES');
        
        return [
            'titulo' => $faker->words(3, true),
            'descripcion' => $faker->paragraph(),
            'director' => $faker->name(),
            'anio' => $faker->numberBetween(1980, now()->year),
            'sinopsis' => $faker->text(300),
            'trailer_url' => $faker->url(),
            'calidad' => $faker->randomElement(['SD', 'HD', 'Full HD', '4K']),
            'categoria_id' => categorias::factory(),
        ];
    }
}

<?php

namespace Database\Seeders;

use App\Models\categorias;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        categorias::factory()
            ->count(10)
            ->has(\App\Models\peliculas::factory()->count(10), 'peliculas')
            ->create();
    }
}
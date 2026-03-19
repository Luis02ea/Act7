<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(3),
            'portada' => $this->faker->imageUrl(),
            'contenido' => $this->faker->paragraph(),
            'material' => $this->faker->text(),
            'grupo_id' => rand(1,3),
            'kit_id' => rand(1,3),
        ];
    }
}

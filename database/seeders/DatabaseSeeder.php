<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
  public function run(): void
{
    // 👇 PRIMERO crear dependencias
    \App\Models\Grupo::insert([
        ['nombre'=>'Principiante'],
        ['nombre'=>'Intermedio'],
        ['nombre'=>'Avanzado']
    ]);

    $this->call([
        UserSeeder::class,
        KitSeeder::class,
    ]);

    // 👇 AL FINAL cursos
    \App\Models\Curso::factory(100)->create();
}
}

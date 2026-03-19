<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kit;

class KitSeeder extends Seeder
{
    public function run(): void
    {
        Kit::insert([
            ['nombre' => 'Kit Básico'],
            ['nombre' => 'Kit Intermedio'],
            ['nombre' => 'Kit Avanzado']
        ]);
    }
}

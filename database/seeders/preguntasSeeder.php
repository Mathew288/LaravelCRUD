<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Preguntas;

class preguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Preguntas::create([
            'codigo_pregunta' => 'P001',
            'catalogo_id' => 1,
            'Titulo_pregunta' => '¿Cuál es tu deporte favorito?',
            'activo_pregunta' => true,
        ]);

        Preguntas::create([
            'codigo_pregunta' => 'P002',
            'catalogo_id' => 2,
            'Titulo_pregunta' => '¿Cuál es tu color favorito?',
            'activo_pregunta' => true,
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Respuestas;


class respuestasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Respuestas::create([
            'codigo_respuesta' => 'R001',
            'pregunta_id' => 1,
            'tipo_respuesta_id' => 1,
            'nombre' => 'Juan',
            'apellido' => 'Pérez',
            'celular' => '123456789',
        ]);

        Respuestas::create([
            'codigo_respuesta' => 'R002',
            'pregunta_id' => 2,
            'tipo_respuesta_id' => 2,
            'nombre' => 'María',
            'apellido' => 'González',
            'celular' => '987654321',
        ]);
    }
}

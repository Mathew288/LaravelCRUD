<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Catalogos;

class catalogosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Catalogos::create([
            'titulo_catalogo' => 'Ropa Deportiva',
            'definicion_resultado_catalogo' => 'Ropa para hacer deporte',
            'activo_catalogo' => 1,
        ]);

        Catalogos::create([
            'titulo_catalogo' => 'Medias de Abejita',
            'definicion_resultado_catalogo' => 'Medias Calientes',
            'activo_catalogo' => 0,
        ]);
    }
}

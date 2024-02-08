<?php

namespace Database\Seeders;

use App\Models\tipo_respuestas;
use Illuminate\Database\Seeder;

class TipoRespuestasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fichaClasificacion = ["Totalmente de acuerdo", "En desacuerdo", "Es dificil decidir", "De acuerdo", "Totalmente de acuerdo"];

        for ($i = 0; $i < count($fichaClasificacion); $i++) {
            tipo_respuestas::create([
                'codigo_tipo_respuesta' => 'TR00' . ($i + 1),
                'titulo_tipo_respuesta' => $fichaClasificacion[$i],
                'valor_tipo_respuesta' => $i + 1,
            ]);
        }
    }
}

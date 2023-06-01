<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Evento;
use App\Models\Participante;
use App\Models\Comentario;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $evento = Evento::where('nombre','lectura Mediaval')->first();
        $participante = Participante::where('usuario_id',22);
        Comentario::create([
            'contenido' => 'ta wueno',
            'participante_id' => 22,
            'evento_id' => $evento->id,
        ]);

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Evento;
use App\Models\Expositor;
use App\Models\Contenido;

class ContenidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // lectura draconiana
           //Introduccion
        $evento = Evento::where('nombre','lectura Mediaval')->firstOrFail();
        $tema =  $evento->temas()->where('nombre', 'Introducción')->firstOrFail();
        $expositor = Expositor::where('usuario_id','12')->first();
        Contenido::create([
            'titulo' => 'los inicios',
            'archivo' => 'archivo1',
            'descripcion' => 'contiene temas y etc..',
            'tema_id' =>  $tema->id,
            'expositor_id'=> $expositor->id,
        ]);

    }
}

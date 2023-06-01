<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\eventoParticipante;
use App\Models\Evento;
class EventoParticipanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $participante = User::where('name', 'Maria')->first();
        $evento = Evento::where('nombre', 'lectura Mediaval')->first();
        eventoParticipante::create([
            'evento_id' => $evento->id,
            'participante_id' => $participante->id,
            'inscrito' => true,
            'reservado' => false,
        ]);

        $participante = User::where('name', 'Mario')->first();
        $evento = Evento::where('nombre', 'lectura Draconiana')->first();
        eventoParticipante::create([
            'evento_id' => $evento->id,
            'participante_id' => $participante->id,
            'inscrito' => false,
            'reservado' => true,
        ]);

        $participante = User::where('name', 'Jaime')->first();
        $evento = Evento::where('nombre', 'El señor de los anillos')->first();
        eventoParticipante::create([
            'evento_id' => $evento->id,
            'participante_id' => $participante->id,
            'inscrito' => true,
            'reservado' => false,
        ]);

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Evento;
use App\Models\Infraestructura;
use App\Models\Reserva;
use Carbon\Carbon;

class ReservaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $evento = Evento::where('nombre','lectura Mediaval')->firstOrFail();
        $tema =  $evento->temas()->where('nombre', 'Introducción')->firstOrFail();
        $infraestructura = Infraestructura::where('tema_id',$tema->id)->firstOrFail();
        Reserva::create([
            'fecha' => Carbon::parse('2022-06-15'),
            'hora_inicio' => Carbon::parse($tema->hora_inicio),
            'hora_fin' => Carbon::parse($tema->hora_fin),
            'tema_id' => $tema->id ,
            'infraestructura_id' => $infraestructura->id,
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Evento;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Evento::create([
            'nombre'=> 'lectura Mediaval',
            'descripcion'=> 'lorem Ipsun',
            'tipo'=> 'taller',
        ]);

        Evento::create([
            'nombre'=> 'lectura Draconiana',
            'descripcion'=> 'lorem Ipsun',
            'tipo'=> 'mesa redonda',
        ]);

        Evento::create([
            'nombre'=> 'El señor de los anillos',
            'descripcion'=> 'lorem Ipsun',
            'tipo'=> 'debate',
        ]);

    }
}

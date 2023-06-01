<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Evento;
use App\Models\Controlador;
use App\Models\Infraestructura;

class InfraestructuraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //


        Infraestructura::create([
            'ambiente_id' => 1,
            'tema_id' => 1,

        ]);

        Infraestructura::create([
            'ambiente_id' => 1,
            'tema_id' => 2,

        ]);
        Infraestructura::create([
            'ambiente_id' => 1,
            'tema_id' => 3,

        ]);

        Infraestructura::create([
            'ambiente_id' => 2,
            'tema_id' => 4,
        ]);
        Infraestructura::create([
            'ambiente_id' => 2,
            'tema_id' => 5,
        ]);
        Infraestructura::create([
            'ambiente_id' => 2,
            'tema_id' => 6,
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ambiente;

class AmbienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ambiente::create([

            'nombre' => 'amarillo',
            'capacidad' => '50',
            'estado' => 'ocupado',
            'controlador_id' => 1,

        ]);
        Ambiente::create([

            'nombre' => 'rojo',
            'capacidad' => '20',
            'estado' => 'disponible',
            'controlador_id' => 1,

        ]);

        Ambiente::create([

            'nombre' => 'verde',
            'capacidad' => '30',
            'estado' => 'ocupado',
            'controlador_id' => 1,

        ]);
    }
}

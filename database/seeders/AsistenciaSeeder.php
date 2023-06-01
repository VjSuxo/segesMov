<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Asistencia;
use App\Models\Participante;
use App\Models\eventoParticipante;
use App\Models\Tema;
class AsistenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Asistencia::create([
            'usuario_id' => 22,
            'tema_id' => 1,
            'asistio' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

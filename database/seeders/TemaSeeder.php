<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Evento;
use App\Models\Expositor;
use App\Models\Tema;
class TemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // lectura mediaval
        $evento = Evento::where('nombre','lectura Mediaval')->first();
        $expositor = Expositor::where('usuario_id','12')->first();
        Tema::create([
            'nombre' => 'Introduccion',
            'descripcion'=> 'Lorem',
             'hora_inicio' => '10:00',
              'hora_fin' => '12:00',
               'evento_id' => $evento->id,
                'expositor_id' => $expositor->id,
        ]);
        Tema::create([
            'nombre' => 'Desarrollo',
            'descripcion'=> 'Lorem',
             'hora_inicio' => '10:00',
              'hora_fin' => '12:00',
               'evento_id' => $evento->id,
                'expositor_id' => $expositor->id,
        ]);
        Tema::create([
            'nombre' => 'Finalizacion',
            'descripcion'=> 'Lorem',
             'hora_inicio' => '10:00',
              'hora_fin' => '12:00',
               'evento_id' => $evento->id,
                'expositor_id' => $expositor->id,
        ]);

        // lectura draconiana
        $evento = Evento::where('nombre','lectura Draconiana')->first();
        $expositor = Expositor::where('usuario_id','12')->first();
        Tema::create([
            'nombre' => 'Introduccion',
            'descripcion'=> 'Lorem',
             'hora_inicio' => '10:00',
              'hora_fin' => '12:00',
               'evento_id' => $evento->id,
                'expositor_id' => $expositor->id,
        ]);
        Tema::create([
            'nombre' => 'Desarrollo',
            'descripcion'=> 'Lorem',
             'hora_inicio' => '10:00',
              'hora_fin' => '12:00',
               'evento_id' => $evento->id,
                'expositor_id' => $expositor->id,
        ]);
        Tema::create([
            'nombre' => 'Finalizacion',
            'descripcion'=> 'Lorem',
             'hora_inicio' => '10:00',
              'hora_fin' => '12:00',
               'evento_id' => $evento->id,
                'expositor_id' => $expositor->id,
        ]);

        // lectura mediaval
        $evento = Evento::where('nombre','El señor de los anillos')->first();
        $expositor = Expositor::where('usuario_id','12')->first();
        Tema::create([
            'nombre' => 'Presentacion',
            'descripcion'=> 'Lorem',
             'hora_inicio' => '10:00',
              'hora_fin' => '12:00',
               'evento_id' => $evento->id,
                'expositor_id' => $expositor->id,
        ]);
        Tema::create([
            'nombre' => 'Desarrollo',
            'descripcion'=> 'Lorem',
             'hora_inicio' => '10:00',
              'hora_fin' => '12:00',
               'evento_id' => $evento->id,
                'expositor_id' => $expositor->id,
        ]);
        Tema::create([
            'nombre' => 'Conclusiones',
            'descripcion'=> 'Lorem',
             'hora_inicio' => '10:00',
              'hora_fin' => '12:00',
               'evento_id' => $evento->id,
                'expositor_id' => $expositor->id,
        ]);

    }
}


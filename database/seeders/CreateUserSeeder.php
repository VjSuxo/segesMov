<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Expositor;
use App\Models\Participante;
use App\Models\Controlador;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //0 = admin, 1 = user, 2 = controlador, 3 = expositor

       $usuario =  User::create([
            'id' => 12,
            'name' => 'juanperez',
            'email' => 'juanperez@abccorp.com',
            'password' => bcrypt('123456789'),
            'role'=>3,
            'apellido_Pat'=>'Perez',
            'apellido_Mat'=> 'Perez',
            'anio_Nac'=> 2000,
            'genero'=> 'unicornio',

        ]);

        $expositor=Expositor::create([
            'nombre_empresa' => 'ABC Corp',
            'biografia' => 'Patitos',
            'usuario_id' => $usuario->id,
        ]);



        $usuario =  User::create([
            'id' => 22,
            'name' => 'Maria',
            'email' => 'mariagomez@gmail.com',
            'password' => bcrypt('123456789'),

            'role'=>1,
            'apellido_Pat'=>'Gomez',
            'apellido_Mat'=> 'Perez',
            'anio_Nac'=> 2000,
            'genero'=> 'unicornio',

        ]);

        $participante=Participante::create([
            'nivel_estudios' => 'intermedio',
            'profesion' => 'estudiante',
            'usuario_id' => $usuario->id,
        ]);

        ////
        $usuario =  User::create([
            'id' => 23,
            'name' => 'Mario',
            'email' => 'mariogomez@gmail.com',
            'password' => bcrypt('123456789'),

            'role'=>1,
            'apellido_Pat'=>'Gomez',
            'apellido_Mat'=> 'Per',
            'anio_Nac'=> 2000,
            'genero'=> 'unicornio',

        ]);

        $participante=Participante::create([
            'nivel_estudios' => 'intermedio',
            'profesion' => 'estudiante',
            'usuario_id' => $usuario->id,
        ]);

        $usuario =  User::create([
            'id' => 24,
            'name' => 'Jaime',
            'email' => 'Jaimegomez@gmail.com',
            'password' => bcrypt('123456789'),

            'role'=>1,
            'apellido_Pat'=>'Perex',
            'apellido_Mat'=> 'Text',
            'anio_Nac'=> 2000,
            'genero'=> 'unicornio',

        ]);

        $participante=Participante::create([
            'nivel_estudios' => 'intermedio',
            'profesion' => 'estudiante',
            'usuario_id' => $usuario->id,
        ]);
        ///

        // CONTROLADOR

      $usuario = User::create([
            'id' => 32,
            'name' => 'pedro',
            'email' => 'pedrorodriguez@hotmail.com',
            'password' => bcrypt('password123'),

            'role'=>2,
            'apellido_Pat'=>'Rodriguez',
            'apellido_Mat'=> 'Perez',
            'anio_Nac'=> 2000,
            'genero'=> 'unicornio',
        ]);

       $controlador = Controlador::create([
                  'turno' => 'mañana',
                 'fecha_inicio_contrato' => '2022-01-01',
                  'fecha_termino_contrato' => '2022-12-01',
                  'usuario_id' => $usuario->id,
                  // ...
       ]);

       $usuario = User::create([

        'name' => 'Kira',
        'email' => 'KiraYam@hotmail.com',
        'password' => bcrypt('password123'),

        'role'=>2,
        'apellido_Pat'=>'Yamashi',
        'apellido_Mat'=> 'Perez',
        'anio_Nac'=> 2000,
        'genero'=> 'unicornio',
        ]);

    $controlador = Controlador::create([
                'turno' => 'mañana',
                'fecha_inicio_contrato' => '2022-01-01',
                'fecha_termino_contrato' => '2022-12-01',
                'usuario_id' => $usuario->id,
                // ...
    ]);
    $usuario = User::create([

        'name' => 'Torino',
        'email' => 'TorinoMarquez@hotmail.com',
        'password' => bcrypt('password123'),

        'role'=>2,
        'apellido_Pat'=>'Marquez',
        'apellido_Mat'=> 'Carabaz',
        'anio_Nac'=> 2000,
        'genero'=> 'unicornio',
    ]);

    $controlador = Controlador::create([
            'turno' => 'mañana',
            'fecha_inicio_contrato' => '2022-01-01',
            'fecha_termino_contrato' => '2022-12-01',
            'usuario_id' => $usuario->id,
            // ...
    ]);


    }
}

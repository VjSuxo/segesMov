<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Participante;
use App\Models\Expositor;
use App\Models\Controlador;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

    protected function create(array $data )
    {
        $user = User::create([
            'id' => $data['ci'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'apellido_Pat' => $data['apellidoPaterno'],
            'apellido_Mat' => $data['apellidoMaterno'],
            'anio_Nac' => $data['anioNac'],
            'genero' => $data['genero'],
        ]);
        $par = Participante::create([
            'nivel_estudios'=>$data['estudios'],
            'profesion' => $data['profesion'],
            'usuario_id' => $user->id,
        ]);
        Expositor::create([
            'nombre_empresa'=> $data['empresa'],
            'biografia' => $data['descri'],
            'usuario_id' => $user->id,
        ]);
        Controlador::create([
            'turno' => 'mañana',
            'fecha_inicio_contrato' => '2022-01-01',
            'fecha_termino_contrato' => '2022-01-01',

            'usuario_id' => $user->id,
        ]);
        return $user;
    }
}

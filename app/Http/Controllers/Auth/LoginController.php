<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\Models\Auditoria;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {



        $input = $request->all();



        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
            //'g-recaptcha-response' => ['required',new \App\Rules\Recaptcha]
        ]);

        $auditoria = new Auditoria();





        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->role == 'admin')
            {
                $auditoria->user_id = auth()->user()->id;
                $auditoria->accion = 'Inicio de sesión';
                $auditoria->modelo = 'Administrador';
               // $auditoria->valores_viejos = null;
              //  $auditoria->valores_nuevos = null;
                $auditoria->save();
              return redirect()->route('admin.home');
            }
            else if (auth()->user()->role == 'controlador')
            {
                $auditoria->user_id = auth()->user()->id;
                $auditoria->accion = 'Inicio de sesión';
                $auditoria->modelo = 'Controlador';
              //  $auditoria->valores_viejos = null;
               // $auditoria->valores_nuevos = null;
                $auditoria->save();
              return redirect()->route('controlador.home');
            }
            else if (auth()->user()->role == 'expositor')
            {
                $auditoria->user_id = auth()->user()->id;
                $auditoria->accion = 'Inicio de sesión';
                $auditoria->modelo = 'Expositor';
               // $auditoria->valores_viejos = null;
               // $auditoria->valores_nuevos = null;
                $auditoria->save();
              return redirect()->route('expositor.Index');
            }
            else
            {
                $auditoria->user_id = auth()->user()->id;
                $auditoria->accion = 'Inicio de sesión';
                $auditoria->modelo = 'Usuario';
                //$auditoria->valores_viejos = null;
                //$auditoria->valores_nuevos = null;
                $auditoria->save();
              return redirect()->route('user.home');
            }
        }
        else
        {
            return redirect()
            ->route('login')
            ->with('error','Incorrect email or password!.');
        }
    }

    public function logout(Request $request)
{
    $user = Auth::user();
    $auditoria = new Auditoria();
    $auditoria->user_id = $user->id;
            $auditoria->modelo = $user->role;
            $auditoria->accion = 'Cierre de sesión';
            $auditoria->save();

    $this->guard()->logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
}

}

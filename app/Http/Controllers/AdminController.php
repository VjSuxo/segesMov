<?php

namespace App\Http\Controllers;

//Importando modelos
use App\Models\User;
use App\Models\Tema;
use App\Models\Participante;
use App\Models\eventoParticipante;
use App\Models\Expositor;
use App\Models\Contenido;
use App\Models\Controlador;
use App\Models\Evento;
use App\Models\Ambiente;
use App\Models\Auditoria;
use App\Models\Infraestructura;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminHome()
    {
        return view('admin/home',["msg"=>"Hello! I am admin"]);
    }
    // obteniendo la tabla de usuarios
    public function indexUsuarios()
    {
        $user = User::paginate(10);
        return view('admin/usuarios',['usuarios'=>$user]);

    }

    public function indexEventos()
    {
        $eventos = Evento::get();
        $eventos = Evento::with('temas.contenido')->get();
//

      //  $infraestructura = $evento->temas[0]->infraestructura;
        //$nombre_contenido = $contenido->nombre;
        //$nombre_infraestructura = $infraestructura->id_ambiente;
        // ---- return $evento->temas[0]->infraestructura; -- esto retorna solo la infraestructura usada
        // ---- return $evento->temas[0]->contenido; -- esto retorna solo el contenido
        // ----- return count($eventos[0]->temas); --- te permite contar los temas


        return view('admin/eventos',['eventos'=>$eventos]);
    }


    public function indexTemas(Evento $evento)
    {
        $eventos = Evento::with('temas.contenido', 'temas.infraestructura')->find($evento->id);
        //$ambiente = Ambiente::find();

      //  $infraestructura = $evento->temas[0]->infraestructura;
        //$nombre_contenido = $contenido->nombre;
        //$nombre_infraestructura = $infraestructura->id_ambiente;
        // ---- return $evento->temas[0]->infraestructura; -- esto retorna solo la infraestructura usada
        // ---- return $evento->temas[0]->contenido; -- esto retorna solo el contenido
        // ----- return count($eventos[0]->temas); --- te permite contar los temas

        $ambiente = Ambiente::get();
       //return $eventos;
       return view('admin/eventos/temas',['eventos'=>$eventos, 'ambientes'=>$ambiente]);
    }


    public function indexPagina_web()
    {
        return view('admin/pagina_web',["msg"=>"Hello! I am admin"]);
    }

    public function indexAmbiente()
    {
        $ambientes = Ambiente::get();
        return view('admin/ambientes',['ambientes'=>$ambientes]);
    }

    public function historialUsuario(User $usuario){
        $auditorias = Auditoria::where('user_id',$usuario->id)->paginate(10);
        return view('admin/historial_Usuarios',['auditorias'=>$auditorias]);
    }

    public function userUpdate(User $usuario)
    {

        // return $usuario;
        return view('admin/userMod',['usuario'=>$usuario]);
    }

    public function userUp(Request $request)
    {



        $user = User::find($request->id);


        $user->name = $request->nombre;
        $user->apellido_Pat = $request->apPat;
        $user->apellido_Mat = $request->apMat;
        $user->genero = $request->genero;
        $user->role = $request->rol;
        $user->save();
        return redirect()->route('admin.home');
    }

    public function eliminarEvento(Evento $evento)
    {
        //return $evento->certificado;
        foreach ($evento->temas as $tema) {
            // Eliminar el contenido relacionado con el tema
            foreach ($tema->contenido as $contenido) {
                $contenido->delete();
            }
            // Eliminar el contenido relacionado con el infraestructura
            // Eliminar el tema
            $tema->delete();
        }
        foreach ($evento->eventoParticipante as $eve) {
            $eve->delete();
        }
        foreach ($evento->asistencias as $eve) {
            $eve->delete();
        }
        foreach ($evento->comentario as $eve) {
            $eve->delete();
        }

        foreach ($evento->certificado as $certificado) {
            if($certificado->exists()){
                $certificado->delete();
            }

            //$certificado->delete();
        }

        $evento->delete();
        return redirect()->route('admin.home');
    }
    public function eventoIndex(Evento $evento)
    {
        //return $evento;
        return view('/admin/eventos/index',['evento'=>$evento]);
    }

    public function editarEvento(Evento $evento)
    {
        return view('/admin/eventos/editarEvento',['evento'=>$evento]);
    }

    public function updateImagen(Request $request,Evento $evento )
    {
        $request->validate([
            'imagen' => 'required|image'
        ]);
        $imagens =  $request->file('imagen')->store('public/baner');
        $url = Storage::url($imagens);

        $evento->update([
            'url' => $url,
        ]);
        return redirect()->route('admin.editarEvento',['evento'=>$evento->id]);

    }

    public function indexEvento(Evento $evento)
    {
        return redirect()->route('admin.eventos');
    }

    public function upEventoInf(Request $request, Evento $evento)
    {
        # code...
        $evento->nombre = $request->titulo;
        $evento->descripcion = $request->des;
        $evento->save();
        return redirect()->route('admin.editarEvento',['evento'=>$evento->id]);

    }

    public function agregarTema(Evento $evento)
    {
        $expo = Expositor::get();
        return view('/admin/crearTema',['evento'=>$evento, 'expositores'=>$expo]);
    }

    public function modTema(Evento $evento, Tema $tema)
    {
        $expo = Expositor::get();
        return view('/admin/modEvento',['evento'=>$evento, 'expositores'=>$expo,'tema'=>$tema]);
    }

    public function storeTema(Evento $evento,Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'hI' => 'required',
            'hF' => 'required',
            'expositor' => 'required',
            'fecha' => 'required',
        ]);
        //return $request;
        $tema = Tema::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'hora_inicio'=> $request->hI,
            'hora_fin' => $request->hF,
            'evento_id' => $evento->id,
            'expositor_id' => $request->expositor,
            'fecha' => $request->fecha,
        ]);
        return redirect()->route('admin.agregarTema',['evento'=>$evento->id]);
    }

    public function updateTema(Evento $evento, Tema $tema,Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'hI' => 'required',
            'hF' => 'required',
            'expositor' => 'required',
            'fecha' => 'required',
        ]);
        //return $request;
        $tema->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'hora_inicio' => $request->hI,
            'hora_fin' => $request->hF,
            'expositor_id' => $request->expositor,
            'fecha' => $request->fecha,
        ]);
        return redirect()->route('admin.agregarTema',['evento'=>$evento->id]);
    }

    public function crearUsuario()
    {
        return view('/admin/crearUsuario');
    }

    public function storeUsuario(Request $request)
    {

        $user = User::create([
            'id' => $request->ci ,
            'name' => $request->name,
            'email'=> $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->rol,
            'apellido_Pat' =>  $request->apellidoPaterno,
            'apellido_Mat' =>  $request->apellidoMaterno,
            'anio_Nac'=>  $request->anioNac,
            'genero' =>  $request->genero,
        ]);
        $par = Participante::create([
            'nivel_estudios'=> $request->estudios,
            'profesion' =>  $request->profesion,
            'usuario_id' => $user->id,
        ]);
        Expositor::create([
            'nombre_empresa'=> $request->empresa,
            'biografia' =>  $request->descri,
            'usuario_id' => $user->id,
        ]);
        Controlador::create([
            'turno' => 'mañana',
            'fecha_inicio_contrato' => '2022-01-01',
            'fecha_termino_contrato' => '2022-01-01',
            'usuario_id' => $user->id,
        ]);
        return redirect()->route('admin.usuarios');
    }


    public function buscarUsuario(Request $usuario)
    {
        $query = $usuario->input('query');

    $usuarios = User::where('id', 'LIKE', '%' . $query . '%')
        ->orWhere('name', 'LIKE', '%' . $query . '%')
        ->orWhere('apellido_Pat', 'LIKE', '%' . $query . '%')
        ->orWhere('apellido_Mat', 'LIKE', '%' . $query . '%')
        ->paginate(10);

    return view('/admin/usuarios', ['usuarios'=>$usuarios]);
    }

    public function elimiar( User $usuario )
    {
        $par = Participante::get();
        $exp = Expositor::get();
        $cont = Controlador::get();
        foreach ($par as $pa){
            if($pa->usuario_id == $usuario->id){
                //$pa->delete();
                eventoParticipante::where('participante_id',$pa->id)->delete();
               // $pa->eventoParticipantes->delete();
               $pa->delete();
            }
        }

        foreach ($exp as $pa){
            if($pa->usuario_id == $usuario->id){
                //$pa->delete();
                Contenido::where('expositor_id',$pa->id)->delete();
                Tema::where('expositor_id',$pa->id)->delete();
               // $pa->eventoParticipantes->delete();
               $pa->delete();
              
            }
        }
        foreach ($cont as $pa){
            if($pa->usuario_id == $usuario->id){
                //$pa->delete();
                Evento::where('controlador_id',$pa->id)->delete();
                Ambiente::where('controlador_id',$pa->id)->delete();
               // $pa->eventoParticipantes->delete();
               $pa->delete();
               
            }
        }
        
        $usuario->delete();  
        $usuarios = User::paginate(10);
        return redirect()->route('admin.usuarios',['usuarios'=>$usuarios]);

    }

}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Asistencia;
use App\Models\Comentario;
use App\Models\Participante;
use App\Models\Expositor;
use App\Models\eventoParticipante;
use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user =  Auth::id();
        $participanteId = Participante::where('usuario_id','=', $user)->first();

        //$eventos = Evento::whereHas('eventoParticipante.participante', function($query) use ($participanteId) {
        //    $query->where('id', $participanteId->id);
       // })->get();

        $eventos = Evento::whereHas('eventoParticipante.participante', function($query) use ($participanteId) {
            $query->where('id', $participanteId->id)->where('inscrito', 1);
       })->get();


        //return $eventos;
        return view('/user/misEventos',['eventos'=>$eventos]);
    }

    public function userEventos()
    {
        $user =  Auth::id();
        $participanteId = Participante::where('usuario_id','=', $user)->first();

        //$eventos = Evento::whereHas('eventoParticipante.participante', function($query) use ($participanteId) {
        //    $query->where('id', $participanteId->id);
       // })->get();

        $eventos = Evento::whereHas('eventoParticipante.participante', function($query) use ($participanteId) {
            $query->where('id', $participanteId->id)->where('inscrito', 1);
       })->get();


        //return $eventos;
        return view('/user/misEventos',['eventos'=>$eventos]);
    }

    public function userEventosIndex(Evento $evento)
    {
        $evento = Evento::with('temas' )->find($evento->id);
      //  return $evento;
        return view('/user/evento/index',['evento'=>$evento]);
    }

    public function userEventosMaterial(Evento $evento)
    {
        $evento = Evento::with('temas' , 'temas.contenido' )->find($evento->id);
      //  return $evento->temas[0]->contenido;
        return view('/user/evento/material',['evento'=>$evento]);
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     *  Gestion evento
     * $user =  Auth::id();
        *$user = User::with('participante')->find($user);
        *return $user;
     *
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        User::create($request);
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin.user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.edit.user.show',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, User $user)
    {
        User::update($request->all());
        return redirect()->route('users.index');
    }

    public function crearComentario(Request $request)
    {
        //return Auth::id();
        $evento = Evento::find($request->event);
        $participanteId = Participante::where('usuario_id','=',Auth::id())->first();
        //return $evento->comentario;
        //return $request;
         Comentario::create([
            'contenido' => $request->comentario,
            'participante_id'=>$participanteId->id,
            'evento_id' => $evento->id,
         ]);
         //return $request;
        // return Comentario::get();
         $evento = Evento::with('temas' )->find($evento->id);
         return back();

       //  return view('/user/evento/index',['evento'=>$evento]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }



    /**
     * Crear Eventos
     */

    public function crearEvento()
    {
        $expositor = Expositor::get();
        return view('/user/evento/crearEvento',['expositores' => $expositor]);
    }

    public function storeEvento(Request $request)
    {
        return $request;
        $expositor = Expositor::get();
        return view('/user/evento/crearEvento',['expositores' => $expositor]);
    }

    public function registro(Evento $evento)
    {

        $participante = Participante::where('usuario_id','=',Auth::user()->id)->first();
        $inscribe = eventoParticipante::where('evento_id','=',$evento->id)
        ->Where('participante_id', '=', $participante->id)
        ->first();

        if(empty($inscribe)){
            eventoParticipante::create([
            'evento_id' => $evento->id,
            'participante_id' => $participante->id,
            'inscrito' => 1,
             ]);
        }

        $inscribe = eventoParticipante::where('evento_id','=',$evento->id)
        ->Where('participante_id', '=', $participante->id)
        ->first();
        $inscribe = eventoParticipante::find($inscribe->id);
        $inscribe->inscrito = 1;
        $inscribe->reservado = 0;
        $inscribe->save();

        Asistencia::create([
            'asistio' => 0,
            'evento_id' => $evento->id,
            'participante_id' => $participante->id ,
        ]);

        return redirect()->route('eventoIndex', ['evento' => $evento] );
    }

    public function registroR(Evento $evento)
    {

        $participante = Participante::where('usuario_id','=',Auth::user()->id)->first();
        $inscribe = eventoParticipante::where('evento_id','=',$evento->id)
        ->Where('participante_id', '=', $participante->id)
        ->first();

        if(empty($inscribe)){
            eventoParticipante::create([
            'evento_id' => $evento->id,
            'participante_id' => $participante->id,
            'reservado' => 1,
             ]);
        }

        $inscribe = eventoParticipante::where('evento_id','=',$evento->id)
        ->Where('participante_id', '=', $participante->id)
        ->first();
        $inscribe = eventoParticipante::find($inscribe->id);
        $inscribe->reservado = 1;
        $inscribe->save();


        return redirect()->route('eventoIndex', ['evento' => $evento] );
    }


}

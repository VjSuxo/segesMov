<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expositor;
use App\Models\Evento;
use App\Models\Contenido;
use App\Models\Tema;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ExpositorController extends Controller
{
    //
    public function expositorHome()
    {

        return Auth::id();
        return view('/expositor/home',["msg"=>"Hello! I am expositor"]);
    }

    public function index()
    {
        //return Auth::id();
        $exp = Expositor::where('usuario_id',Auth::id())->first();
        //return $exp;
        $tema = Tema::where('expositor_id',$exp->id)->get();
        //return $tema;
        return view('expositor/indexExpo',['temas'=>$tema]);
    }

    public function foto()
    {
        return view('/expositor/foto');
    }
    public function upfoto(Request $request)
    {
        $request->validate([
            'imagen' => 'required|image'
        ]);
        $exp = Expositor::where('usuario_id',Auth::id())->first();

        $imagens =  $request->file('imagen')->store('public/expositores');
        $url = Storage::url($imagens);
        $exp->url = $url;
        $exp->save();
        return  redirect()->route('expositor.Index');
    }
    public function expositorEvento()
    {
        return view('/expositor/evento/index',["msg"=>"Hello! I am expositor"]);
    }

    public function expositorMaterial(Tema $tema)
    {
        $exp = Expositor::where('usuario_id',Auth::id())->first();
        $contenido = Contenido::where('expositor_id',$exp->id)->get();
        //return $contenido;
        return view('/expositor/evento/material',['contenidos'=>$contenido,'tema'=>$tema]);
    }

    public function subirMaterial(Tema $tema)
    {
        $exp = Expositor::where('usuario_id',Auth::id())->first();
        return view('/expositor/evento/subirMaterial',['tema'=>$tema,'expositor'=>$exp]);
    }

    public function createMaterial(Tema $tema,Request $request)
    {
        $exp = Expositor::where('usuario_id',Auth::id())->first();
        $archivo = $request->file('archivo')->store('public/documentos');
        $url = Storage::url($archivo);
        $coten = Contenido::create([
            'titulo' => $request->titulo,
            'archivo' => $url,
            'descripcion'=> $request->descripcion,
            'tema_id' => $tema->id,
            'expositor_id' => $exp->id,
        ]);

        return redirect()->route('expositor.eventoMaterial',['tema'=>$tema]);
    }

    public function editarCont(Tema $tema,Contenido $contenido)
    {
        return view('/expositor/editarCont',['contenido'=>$contenido,'tema'=>$tema]);
    }

    public function updateContenido(Request $request,Contenido $contenido,Tema $tema)
    {  
    
        if(empty($request->archivo)){
            $contenido->titulo = $request->titulo;
            $contenido->descripcion= $request->descripcion;
            $contenido->save();
        }
        else{
            $archivo = $request->file('archivo')->store('public/documentos');
            $url = Storage::url($archivo);
            $contenido->titulo = $request->titulo;
            $contenido->archivo = $url;
            $contenido->descripcion= $request->descripcion;
            $contenido->save();
        }
        
        return redirect()->route('expositor.eventoMaterial',['tema'=>$tema]);       
    }

    public function eliminarContenido(Tema $tema, Contenido $contenido)
    {
        $contenido->delete();
        return redirect()->route('expositor.eventoMaterial',['tema'=>$tema]);
    }


}

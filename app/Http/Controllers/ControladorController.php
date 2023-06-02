<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Carbon\Carbon;
use App\Mail\DemoEmail;

use App\Models\User;
use App\Models\Expositor;
use App\Models\Evento;
use App\Models\Tema;
use App\Models\Controlador;
use App\Models\Certificado;
use App\Models\Participante;
use App\Models\Ambiente;
use App\Models\Asistencia;
use App\Models\Infraestructura;
use App\Models\Reserva;
use App\Models\eventoParticipante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;



class ControladorController extends Controller
{
    public function controladorHome()
    {

        //$user_id = Auth::id();
        $controlador = Controlador::where('usuario_id',Auth::id())->first();
        $eventos = Evento::with('temas.contenido','controlador')->where('controlador_id',$controlador->id)->get();
        return view('controlador/home',['eventos'=>$eventos]);
    }

    public function controladorEventoIndex(Evento $eve)
    {
        $evento = Evento::with('comentario', 'comentario.participante', 'comentario.participante.usuario' ,'temas.contenido' , 'temas.expositor', 'temas.expositor.usuario')->find($eve->id);

        //return  $evento->temas[0]->id;

        return view('controlador/evento/index',['evento'=>$evento]);
    }

    public function controladorEventoInformacion(Evento $evento)
    {
        return view('controlador/evento/pp',['evento'=>$evento]);
    }



    public function controladorEvento_Horario(Evento $evento)
    {
        return view('controlador/evento/horario',['evento' => $evento]);
    }

    public function controladorEvento_Asistencia(Evento $evento)
    {
        $evento = Evento::with('asistencias','asistencias.participante','asistencias.participante.usuario' )->find($evento->id);
        return view('controlador/evento/asistencia',['evento'=>$evento]);
    }


    public function controladorAmbientes(){
        $infras = Infraestructura::get();
        return view('/controlador/ambientes',['infras'=>$infras]);
    }

    public function controladorAmbientesInfo(Ambiente $ambiente){
        $ambiente = Ambiente::get()->find($ambiente->id);

        return view('/controlador/ambientesinfo',['ambiente'=>$ambiente]);
    }

    public function controladorEvento_Certificados(Evento $evento){
        $tema = Evento::with('temas')->find($evento->id);
        $tema = Evento::with('temas')->find($evento->id);
        $tema = count($tema->temas);
         $evento = Evento::with(['asistencias' => function ($query) use ($tema){
            $query->where('asistencias.asistio', '>=', $tema);
            $query->with(['participante', 'participante.usuario']);
        }])->find($evento->id);
        return view('controlador/evento/certificados',['evento' => $evento]);
    }

    public function controladorEvento_Reservas_Inscrip(Evento $evento){
        $evento = Evento::with('eventoParticipante', 'eventoParticipante.participante', 'eventoParticipante.participante.usuario')->find($evento->id);
        return view('controlador/evento/reservas_inscripciones',['evento'=>$evento]);
    }

    public function controladorFilRe(Evento $evento){
        $evento = Evento::with(['eventoParticipante' => function ($query) {
            $query->where('reservado', '=', 1);
            $query->with(['participante', 'participante.usuario']);
        }])->find($evento->id);
        return view('controlador/evento/reservas_inscripciones',['evento'=>$evento]);
    }

    public function controladorFilIns(Evento $evento){
        $evento = Evento::with(['eventoParticipante' => function ($query) {
            $query->where('inscrito', '=', 1);
            $query->with(['participante', 'participante.usuario']);
            }])->find($evento->id);
        return view('controlador/evento/reservas_inscripciones',['evento'=>$evento]);
    }

    public function controladorFilTodo(Evento $evento){
        $evento = Evento::with('eventoParticipante', 'eventoParticipante.participante', 'eventoParticipante.participante.usuario')->find($evento->id);
        return view('controlador/evento/reservas_inscripciones',['evento'=>$evento]);
    }


    public function cargarPDF(Evento $evento){
        $tema = Evento::with('temas')->find($evento->id);
        $tema = Evento::with('temas')->find($evento->id);
        $tema = count($tema->temas);
        $evento = Evento::with(['asistencias' => function ($query) use ($tema){
                $query->where('asistencias.asistio', '=', $tema);
                $query->with(['participante', 'participante.usuario']);
            }])->find($evento->id);
        foreach( $evento->asistencias as $asistencias ){
            Certificado::create([
                'fecha' => now(),
                'participante_id' =>  $asistencias->participante->id,
                'evento_id' => $evento->id,
            ]);

        }
        return view('controlador/evento/certificados',['evento' => $evento]);
    }
    public function enviarPDF(Evento $evento){
        $tema = Evento::with('temas')->find($evento->id);
        $tema = Evento::with('temas')->find($evento->id);
        $tema = count($tema->temas);
        $evento = Evento::with(['asistencias' => function ($query) use ($tema){
                $query->where('asistencias.asistio', '=', $tema);
                $query->with(['participante', 'participante.usuario']);
            }])->find($evento->id);
            return $evento;
        foreach( $evento->asistencias as $asistencias ){
            $dompdf = new Dompdf();
            $pdf->loadHtml(view('certificado', [ 'usuario'=>$usuario , 'evento'=>$evento] ));
            $pdf->setPaper('A4', 'landscape');
            $pdf->render();
            $nombreArch =  public_path('pdf/'.$usuario->id.'.pdf');
            file_put_contents($nombreArch, $dompdf->output());
          return $pdf->stream();
        }
    }

    public function changeFilePermissions($path, $visibility)
{
    Storage::disk('public')->setVisibility($path, $visibility);
}

    public function generarPDF(User $usuario,Evento $evento){


        $css = file_get_contents(public_path('css/style_certificado.css'));
        $pdf = new Dompdf();
        $pdf->loadHtml('<style>' . $css . '</style>' . view('certificado', [ 'usuario'=>$usuario , 'evento'=>$evento] ));
        $pdf->setPaper('A4', 'landscape');
        $pdf->render();
        $nombreArch =  public_path('pdf/'.$usuario->id.'.pdf');
        $this->changeFilePermissions($nombreArch , 'public');
            file_put_contents($nombreArch, $pdf->output());
            $ge = Carbon::now()->toDateString();

          $cer =  Certificado::create([
            'fecha' => $ge,
            'participante_id' => Participante::where('usuario_id',$usuario->id)->first(),
            'enlace' => public_path('pdf/'.$nombreArch) ,
            'evento_id' => $evento->id,
        ]);
      return $pdf->stream();


        return view('controlador/verCertificado',['evento' => $evento, 'usuario' => $usuario]);
    }

    public function desactivarRes(Evento $evento ){
        $evento = Evento::find($evento->id);
        $evento->estado = 1;
        $evento->save();
        $evento = Evento::with('eventoParticipante', 'eventoParticipante.participante', 'eventoParticipante.participante.usuario')->find($evento->id);
        return view('controlador/evento/reservas_inscripciones',['evento'=>$evento]);
    }
    public function desactivarIns(Evento $evento ){
        $evento = Evento::find($evento->id);
        $evento->estado = 2;
        $evento->save();
        $evento = Evento::with('eventoParticipante', 'eventoParticipante.participante', 'eventoParticipante.participante.usuario')->find($evento->id);
        return view('controlador/evento/reservas_inscripciones',['evento'=>$evento]);
    }

    public function activarIns(Evento $evento ){

        $evento = Evento::find($evento->id);
        $evento->estado = 1;
        $evento->save();
        $evento = Evento::with('eventoParticipante', 'eventoParticipante.participante', 'eventoParticipante.participante.usuario')->find($evento->id);
        return view('controlador/evento/reservas_inscripciones',['evento'=>$evento]);
    }

    public function editarEvento(Evento $evento){
        return view('controlador/evento/editarEvento',['evento'=>$evento]);
    }

    public function editarContenido(Evento $evento,Request $request)
    {
        //return $evento;
        $tema = Tema::find($request->idTema);
        $tema->nombre = $request->titulo;
        $tema->hora_inicio = $request->hora;
        $tema->hora_fin = $request->fin;
        $tema->fecha = $request->fecha;
        $tema->save();

        return view('controlador/evento/editarEvento',['evento'=>$evento]);
    }

    public function crearEvento()
    {
        $expositores = Expositor::get();
        return view('/controlador/crearEvento',['expositores'=>$expositores]);
    }

    public function generarEvento(Request $request)
    {
        //return $request;
        $request->validate([
            'imagen' => 'required|image'
        ]);
        $imagens =  $request->file('imagen')->store('public/baner');
        $url = Storage::url($imagens);

        $controlador = Controlador::where('usuario_id',Auth::id())->first();
        $evento = Evento::create([
            'nombre'         => $request->nombre ,
            'descripcion'    => $request->descripcion ,
            'tipo'           => $request->tipo,
            'estado'         => 1,
            'controlador_id' => $controlador->id,
            'url'            => $url,
        ]);


        //return $evento;
        return redirect()->route('controlador.agregarTema',['evento'=>$evento->id]);
        return view('/controlador/crearTema',['evento'=>$evento, 'expositores'=>$expo]);
    }

    public function agregarTema(Evento $evento)
    {
        $expo = Expositor::get();
        $infra = Infraestructura::get();
        $ambientes = Ambiente::get();
        return view('/controlador/crearTema',['evento'=>$evento, 'expositores'=>$expo, 'infraestructuras'=>$infra, 'ambientes'=>$ambientes]);
    }

    public function storeTema(Evento $evento,Request $request)
    {
        //return $request;
        $tema = Tema::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'hora_inicio'=> $request->hI,
            'hora_fin' => $request->hF,
            'evento_id' => $evento->id,
            'expositor_id' => $request->expositor,
            'fecha' => $request->fecha,
            'ambiente_id' => $request->ambiente,
        ]);
        return redirect()->route('controlador.agregarTema',['evento'=>$evento->id]);
    }

    public function indexEvento(Evento $evento)
    {
        return redirect()->route('controlador.evento',['eve'=>$evento]);
    }

    public function modTema(Evento $evento, Tema $tema)
    {$infra = Infraestructura::get();
        $ambientes = Ambiente::get();
        $expo = Expositor::get();
        return view('/controlador/modEvento',['evento'=>$evento, 'expositores'=>$expo,'tema'=>$tema, 'infraestructuras'=>$infra, 'ambientes'=>$ambientes]);
    }

    public function updateTema(Evento $evento, Tema $tema,Request $request)
    {
        //return $request;
        $tema->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'hora_inicio' => $request->hI,
            'hora_fin' => $request->hF,
            'expositor_id' => $request->expositor,
            'fecha' => $request->fecha,
        ]);
        return redirect()->route('controlador.agregarTema',['evento'=>$evento->id]);
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
        return redirect()->route('controlador.editarEvento',['evento'=>$evento->id]);

    }

    public function eliminarEvento(Evento $evento)
    {
        //return $evento->certificado;
        foreach ($evento->temas as $tema) {
            // Eliminar el contenido relacionado con el tema
            foreach ($tema->contenido as $contenido) {
                $contenido->delete();
            }

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
        return redirect()->route('controlador.home');
    }

    public function imprimir(){

        //$pdf->loadHtml(view('certificado', [ 'usuario'=>$usuario , 'evento'=>$evento]));
    //$pdf->loadHtml('<style>' . $css . '</style>' . view('certificado', [ 'usuario'=>$usuario , 'evento'=>$evento]));
    //$pdfName = 'archivo.pdf';
    //$pdf->setPaper('A4', 'landscape');
    //$p/df->render();
    //$pdf = $pdf->output();
    //$pdf_content =
    $css = file_get_contents(public_path('css/style_reporteE.css'));

        $controlador = Controlador::where('usuario_id',Auth::id())->first();

        $eventos = Evento::with('temas.contenido','controlador')->where('controlador_id',$controlador->id)->get();
      //  return view('reporteEvento', [ 'eventos'=>$eventos]);
        $pdf = new Dompdf();
        //$pdf->loadHtml(view('reporteEvento', [ 'eventos'=>$eventos] ));
        $pdf->loadHtml('<style>' . $css . '</style>' . view('reporteEvento', [ 'eventos'=>$eventos]));
        $pdf->setPaper('A4', 'landscape');
        $pdf->render();
      return $pdf->stream();
    }

     public function upEventoInf(Request $request, Evento $evento)
    {
        # code...
        $evento->nombre = $request->titulo;
        $evento->descripcion = $request->des;
        $evento->save();
        return redirect()->route('controlador.editarEvento',['evento'=>$evento->id]);

    }



    public function crearInfra()
    {
        return view('/controlador/crearinfra');
    }

    public function storeInfra(Request $request)
    {
        Infraestructura::create([
            'nombre'=>$request->nombre,
            'direccion'=>$request->direccion,
        ]);
        return redirect()->route('controlador.ambientes');
    }

    public function editInfra(Infraestructura  $infraestructura)
    {
        return view('/controlador/editInfra',['infraestructura' => $infraestructura]);
    }

    public function updateInfra(Request $request, Infraestructura $infraestructura)
    {
            $infraestructura->nombre = $request->nombre;
            $infraestructura->direccion = $request->direccion;
            $infraestructura->save();

        return redirect()->route('controlador.ambientes');
    }

    public function eliminarInfra(Infraestructura $infraestructura)
    {
        $ambientes = Ambiente::get();

        foreach( $ambientes as $ambiente ){
            if($ambiente->infraestructura_id == $infraestructura->id){
                foreach($ambiente->temas as $tema){
                    $tema->ambiente_id = null;
                    $tema->save();
                }
                $ambiente->delete();
            }
        }

        $infraestructura->delete();
        return redirect()->route('controlador.ambientes');
    }

    public function indexAmb(Infraestructura $infraestructura)
    {
        $ambientes = Ambiente::where('infraestructura_id',$infraestructura->id)->get();
        return view('/controlador/indexInfra',['ambientes'=>$ambientes,'infra'=>$infraestructura]);
    }

    public function crearAmbiente()
    {
        $infra = Infraestructura::get();
        return view('/controlador/crearAmbiente',['infraestructuras'=>$infra]);
    }

    public function crearAmbiente2(Infraestructura $infraestructura)
    {
        return view('/controlador/crearAmbiente2',['infraestructuras'=>$infraestructura]);
    }

    public function storeAmbiente(Request $request)
    {
        $controlador = Controlador::where('usuario_id',Auth::id())->first();

        Ambiente::create([
            'nombre'=>$request->nombre,
            'capacidad'=>$request->capacidad,
            'estado'=>'libre',
            'controlador_id'=>$controlador->id,
            'infraestructura_id'=>$request->infra,
        ]);

        return redirect()->route('controlador.indexAmb',['infraestructura' => $infra]) ;
    }

    public function storeAmbiente2(Request $request)
    {
        $controlador = Controlador::where('usuario_id',Auth::id())->first();

        $ambiente = Ambiente::create([
            'nombre'=>$request->nombre,
            'capacidad'=>$request->capacidad,
            'estado'=>'libre',
            'controlador_id'=>$controlador->id,
            'infraestructura_id'=>$request->infra,
        ]);
        $ambientes = Ambiente::where('infraestructura_id',$request->infra)->get();
        $infra = Infraestructura::find($request->infra)->first();
        return view('/controlador/indexInfra',['ambientes'=>$ambientes,'infra'=>$infra]);
    }

    public function editarAmbiente(Ambiente $ambiente,Infraestructura $infraestructura)
    {
        $infra = Infraestructura::get();
        return view('/controlador/editarAmbiente',['ambiente'=>$ambiente,'infraestructuras'=>$infra]);
    }

    public function updateAmbiente(Request $request, Ambiente $ambiente)
    {

        $controlador = Controlador::where('usuario_id',Auth::id())->first();


            $ambiente->nombre = $request->nombre;
            $ambiente->capacidad = $request->capacidad;
            $ambiente->infraestructura_id = $request->infra;
            $ambiente->save();
            $infra = Infraestructura::find($request->infra);

        return redirect()->route('controlador.indexAmb',['infraestructura'=>$infra->id]);
    }

    public function eliminarAmb(Ambiente $ambiente,Infraestructura $infraestructura)
    {

        foreach($ambiente->temas as $tema){
            $tema->ambiente_id = null;
            $tema->save();
        }
        $ambiente->delete();

        return redirect()->route('controlador.indexAmb',['infraestructura'=>$infraestructura]);
    }

    public function marcarAsis(Asistencia $asistencia,Evento $evento)
    {
        $ass = $asistencia->asistio;
        if($ass < count( $evento->temas )){

            $ass = $ass+1;
            $asistencia->asistio = $ass;
            $asistencia->save();

        }
        return redirect()->route('controlador.evento_asistencia',$evento->id);
    }

}

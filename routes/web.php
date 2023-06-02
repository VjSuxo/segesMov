<?php

use Illuminate\Support\Facades\Route;
use App\Models\Evento;
use App\Models\Expositor;
use App\Models\Participante;
use App\Models\eventoParticipante;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ControladorController;
use App\Http\Controllers\ExpositorController;
use  App\Http\Controllers\Admin\Admin_ImgController;
use Illuminate\Http\Request;
/*

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $evento = Evento::get();
    $expositores = Expositor::get();
    return view('welcome', ['eventos' => $evento, 'expositoresP' => $expositores] );
})->name('inicio');
Route::get("/toIndex/{evento}",[UserController::class, 'registro'])->name('registro');
Route::get("/toIndexR/{evento}",[UserController::class, 'registroR'])->name('registroR');


Route::get('/preguntasFrecuentes', function () {
    return view('preguntasFrecuentes');
})->name('preguntas');



Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/eventoIndex/{evento}', function (Evento $evento) {
    //$evento = Evento::get();
    return view('eventoIndex', ['evento' => $evento] );
})->name('eventoIndex');

Route::get('/expositor/{expositor}', function (Expositor $expositor) {
    //$evento = Evento::get();
    return view('expositor', ['expositor' => $expositor] );
})->name('expositor');


Auth::routes(['verify' => true]);
//0 = admin, 1 = user,  2 = controlador, 3 = expositor
// Route User
Route::middleware(['auth','user-role:user','audit'])->group(function()
{

    Route::controller(UserController::class)->group(function(){
        Route::get("/user",'index')->name("user.home");
        Route::get("/user/evento/{evento}/index", 'userEventosIndex')->name("user.evento-index");
        Route::get("/user/evento/{evento}/material", 'userEventosMaterial')->name("user.evento-material");
        Route::post('/','crearComentario')->name('user.crearComentario');

        //Crear EVENTO
        Route::get("/user/evento/crearEvento", 'crearEvento')->name("user.crearEvento");

    });


    Route::get("/user",[UserController::class, 'index'])->name("user.home");
    Route::get("/user/misEventos",[UserController::class, 'userEventos'])->name("user.misEventos");

    Route::get("/home",[HomeController::class, 'userHome'])->name("home");
});
// Route Expositor
Route::middleware(['auth','user-role:expositor','audit'])->group(function()
{
    Route::get("/indexExpo",[ExpositorController::class, 'index'])->name("expositor.Index");
    Route::get("/foto",[ExpositorController::class, 'foto'])->name("expositor.Foto");
    Route::post("/fotoUp",[ExpositorController::class, 'upfoto'])->name("expositor.upFoto");
    Route::get("/expositor/evento/index",[ExpositorController::class, 'expositorEvento'])->name("expositor.eventoIndex");
    Route::get("/expositor/evento/{tema}/Material",[ExpositorController::class, 'expositorMaterial'])->name("expositor.eventoMaterial");
    Route::get("/expositor/evento/{tema}/subirMaterial",[ExpositorController::class, 'subirMaterial'])->name("expositor.subirMaterial");
    Route::post("/{tema}/subirMaterial",[ExpositorController::class, 'createMaterial'])->name('expositor.createCont');
    Route::get("/editarCont/{tema}/{contenido}",[ExpositorController::class, 'editarCont'])->name("expositor.editarCont");
    Route::patch("/upCont/{contenido}/{tema}",[ExpositorController::class, 'updateContenido'])->name('admin.updateContent');
    Route::delete("/eliminarCont/{tema}/{contenido}",[ExpositorController::class, 'eliminarContenido'])->name('expositor.eliminarCont');
});
// Route Admin
Route::middleware(['auth','user-role:admin','audit'])->group(function()
{
    Route::controller(AdminController::class)->group(function(){
        Route::get("/admin/usuarios",'indexUsuarios')->name("admin.usuarios");
        Route::get("/admin/{usuario}/historial_Usuarios",'historialUsuario')->name("admin.usuariosHistorial");
        Route::get("/admin/eventos",'indexEventos')->name("admin.eventos");
        Route::get("/admin/eventos/{evento}/temas",'indexTemas')->name("admin.temas");
        Route::get("/admin/ambientes",'indexAmbiente')->name("admin.ambiente");
        Route::get("/admin/userMod/{usuario}",'userUpdate')->name("admin.userUpdate");
        Route::post("/usuarioModificar",'userUp')->name("admin.userUp");
        Route::get("/admin/eventos/{evento}",'eventoIndex')->name("admin.evento");
        Route::delete("/eliminarEve/{evento}",'eliminarEvento')->name('admin.eliminarEvento');
        Route::get("/admin/eventos/{evento}/editarEvento",'editarEvento')->name("admin.editarEvento");
        Route::patch("/upTema/{evento}",'updateImagen')->name('admin.updateImagen');
        Route::get("/finvento/{evento}",'indexEvento')->name("admin.finEdit");
        Route::post("/eventoUpModificar/{evento}",'upEventoInf')->name("admin.eventoUp");
        Route::get("/aMTema/{evento}",'agregarTema')->name("admin.agregarTema");
        Route::get("/modETema/{evento}/{tema}",'modTema')->name("admin.modTema");
        Route::post("/genTema/{evento}",'storeTema')->name('admin.genTema');
        Route::patch("/updTema/{evento}/{tema}",'updateTema')->name('admin.updateTema');

        Route::get("crearUsuario",'crearUsuario')->name("admin.crearUsuario");
        Route::post("storeUsuario",'storeUsuario')->name("admin.storeUsuario");
        Route::get('/buscar-usuarios', 'buscarUsuario')->name('usuarios.buscar');
        Route::delete('/eliminaruser/{usuario}', 'elimiar')->name('usuarios.eliminar');

    });
    Route::get("/admin/home",[AdminController::class, 'adminHome'])->name("admin.home");
    //Route::get("/admin/home",[Admin_ImgController::class, 'index'])->name("admin.imagenes");


    Route::get("/admin/pagina_web",[AdminController::class, 'indexPagina_Web'])->name("admin.pagina_web");





});

// Route controlador
Route::middleware(['auth','user-role:controlador','audit'])->group(function()
{
    Route::controller(ControladorController::class)->group(function(){
        Route::get("/controlador/home", 'controladorHome')->name("controlador.home");

        Route::get("/controlador/evento/{eve}/index",'controladorEventoIndex')->name("controlador.evento");
        Route::get("/controlador/evento/{evento}/pp",'controladorEventoInformacion')->name("controlador.eventoInformacion");
        Route::get("/controlador/evento/{evento}/reservas_inscripciones",'controladorEvento_Reservas_Inscrip')->name("controlador.evento_ResIns");
            Route::get("/{evento}/desactivarRes",'desactivarRes')->name("controlador.desRes");
            Route::get("/{evento}/desactivarIns",'desactivarIns')->name("controlador.desIns");
            Route::get("/{evento}/activarIns",'activarIns')->name("controlador.activarIns");
        Route::get("/controlador/evento/{evento}/horario", 'controladorEvento_Horario')->name("controlador.evento_horario");
        Route::get("/controlador/evento/{evento}asistencia",'controladorEvento_Asistencia')->name("controlador.evento_asistencia");
        Route::get("/controlador/evento/{evento}/certificados",'controladorEvento_Certificados')->name("controlador.evento_certificados");

        Route::get("c/evento/{evento}/reservas_inscripciones",'controladorFilRe')->name("controlador.IR_Fil_Reserva");
        Route::get("con/evento/{evento}/reservas_inscripciones",'controladorFilIns')->name("controlador.IR_Fil_Ins");
        Route::get("cont/evento/{evento}/reservas_inscripciones",'controladorFilTodo')->name("controlador.IR_Fil_Todo");

        Route::get("/controlador/ambientes",'controladorAmbientes')->name("controlador.ambientes");
        Route::get("/controlador/{ambiente}/ambientesinfo",'controladorAmbientesInfo')->name("controlador.ambientesInfo");

        Route::get("/controlador/evento/{evento}/editarEvento",'editarEvento')->name("controlador.editarEvento");
        Route::get("/controlador/evento/{evento}/editarEvento",'editarEvento')->name("controlador.editarEvento");
        Route::post("/{evento}/editCont",'editarContenido')->name("controlador.edCotenido");

        Route::get("/crearEvento",'crearEvento')->name("controlador.crearEvento");
        Route::get("/agergarTema/{evento}",'agregarTema')->name("controlador.agregarTema");
        Route::get("/modTema/{evento}/{tema}",'modTema')->name("controlador.modTema");
        Route::post("/generar",'generarEvento')->name('controlador.genEve');
        Route::post("/generarTema/{evento}",'storeTema')->name('controlador.genTema');
        Route::patch("/updateTema/{evento}/{tema}",'updateTema')->name('controlador.updateTema');
        Route::patch("/updateTema/{evento}",'updateImagen')->name('controlador.updateImagen');
        Route::get("/finEditEvento/{evento}",'indexEvento')->name("controlador.finEdit");

        Route::get("reporteEvento",'imprimir')->name("controlador.imprimir");
        Route::post("/eventUpModificar/{evento}",'upEventoInf')->name("controlador.eventoUp");
        Route::delete("/eliminarEvento/{evento}",'eliminarEvento')->name('controlador.eliminarEvento');


        Route::get("crearInfra",'crearInfra')->name("controlador.crearInfra");
        Route::post("storeInfra",'storeInfra')->name("controlador.sotreInfra");
        Route::get("editInfra/{infraestructura}",'editInfra')->name("controlador.editInfra");
        Route::patch("updateInfra/{infraestructura}",'updateInfra')->name("controlador.updateInfra");
        Route::delete("/eliminarInfra/{infraestructura}",'eliminarInfra')->name('controlador.eliminarInfra');

        Route::get("verAmbientes/{infraestructura}",'indexAmb')->name("controlador.indexAmb");
        Route::get("crearAmbiente2/{infraestructura}",'crearAmbiente2')->name("controlador.crearAmbiente2");

        Route::get("crearAmbiente",'crearAmbiente')->name("controlador.crearAmbiente");
        Route::post("storeAmbiente",'storeAmbiente')->name("controlador.sotreAmbiente");
        Route::post("storeAmbiente2",'storeAmbiente2')->name("controlador.sotreAmbiente2");
        Route::get("/{ambiente}/{infraestructura}/editarAmbiente",'editarAmbiente')->name("controlador.editarAmbiente");
        Route::patch("/updateAmbiente/{ambiente}",'updateAmbiente')->name('controlador.updateAmbiente');
        Route::delete("/eliminarAmbiente/{ambiente}/{infraestructura}",'eliminarAmb')->name('controlador.eliminarAmb');

        Route::get("/marcarAsistencia/{asistencia}/{evento}",'marcarAsis')->name('controlador.marcarAsis');

        Route::get("/generarPdf/{usuario}/{evento}",'generarPDF')->name('controlador.generaPDF');
    });

    Route::get('/{usuario}/{evento}/certificado',[ControladorController::class, 'generarPDF'])->name("controlador.GenerarPDF");
    Route::get('{evento}/certificado',[ControladorController::class, 'enviarPDF'])->name("controlador.enviarPDF");
    Route::get('e/{evento}/certificados',[ControladorController::class, 'cargarPDF'])->name("controlador.cargarPDF");
    //crear un grup de eventos




});


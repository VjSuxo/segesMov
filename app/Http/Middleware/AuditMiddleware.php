<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;
use Auth;
class AuditMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);


        if (Auth::check()) {
            $user_id = Auth::id();
            $accion = $request->getMethod();
            //$ruta = $request->path();
            $modelo = Auth::user()->role;
            $modelo_id = null;
            $valores_viejos = null;
            $valores_nuevos = null;

            // Obtener el modelo y el modelo_id a partir de la respuesta del controlador
            $content = $response->getContent();
            $json = json_decode($content);
            if (isset($json->data) && is_object($json->data)) {
                $modelo = get_class($json->data);
            }

            // Obtener los valores viejos y nuevos a partir de los cambios hechos en la petición
            $valores_viejos = $request->get('original');
            $valores_nuevos = $request->get('changes');

            // Guardar la auditoría en la base de datos
            DB::table('auditorias')->insert([
                'user_id' => $user_id,
                'accion' => $accion,
             //   'ruta' => $ruta,
                'modelo' => $modelo,
                //'modelo_id' => $modelo_id,
                'valores_viejos' => json_encode($valores_viejos),
                'valores_nuevos' => json_encode($valores_nuevos),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        elseif (Auth::guard()->check()) {
            $user = Auth::user();
            $auditoria = new Auditoria();
            $auditoria->user_id = $user->id;
            $auditoria->modelo = $user->role;
            $auditoria->accion = 'Cierre de sesión';
            $auditoria->save();
        }
        return $response;
    }
}

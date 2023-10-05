<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

// Importamos para la autenticación
use Illuminate\Support\Facades\Auth;

class Role
{
     /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    public function handle(Request $request, Closure $next, $roles)
    {
        // Divide la cadena de roles permitidos en un array
        $allowedRoles = explode('|',$roles);

        // Obtiene el nombre del rol del usuario actual en minúsculas (strolower)
        $roleName = strtolower($request->user()->role->name);


        // Si el rol del usuario es gerente, permite el acceso a todas las rutas
        if ($roleName == 'gerente')
        {
            // Acceda a la ruta a la que va
            return $next($request);
        }

        // Verifica si el nombre del rol de usuario está en la lista de roles permitidos
        if(!in_array($roleName,$allowedRoles))
        {
            // Error 403: Que no tiene los permisos -> Devuelve una vista con 403 y sin autorización
            return abort(403,_('Sin autorización'));
        }

        // Acceda a la ruta a la que va
        return $next($request);
    }
}

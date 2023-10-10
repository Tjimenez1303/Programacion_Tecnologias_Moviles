<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import Auth
use Illuminate\Support\Facades\Auth;

// Import User
use App\Models\User;

class SecurityAuthController extends Controller
{
    // Creamos la función de Login
    public function login (Request $request) {

        // Validacion de datos -> Me valida que si envié los datos de email y password
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Credenciales para autenticar el usuario
        $credentials = request(['email', 'password']); //  Type -> Arreglo asociativo

        // Ver dato que nos retorna
        // var_dump($credentials);

        // Abandonamos la petición
        // exit();

        // Verificamos las credenciales del usuario
        if(!Auth::attempt($credentials)) {
            // Retornamos un mensaje de error
            return response()->json([
                'message' => 'Credenciales incorrectas'
            ], 401);
        }

        // Si las credenciales son correctas, generamos el token para el usuario
        $user = $request -> user(); // Obtenemos el usuario que está haciendo la petición
        $token = $user -> createToken('authToken') -> plainTextToken; // Se crea el token en formato de texto plano

        // Retornamos el token en formato de texto plano
        return response()->json([
            'token' => $token
        ],200);

    }

    // Creamos la función de Logout
    public function logout (Request $request) {

        // Revocar el token de autenticación del usuario actual
        $request->user()->tokens->each(function ($token, $key) {
            $token->delete();
        });
        
        // Retornar una respuesta exitosa
        return response()->json([
            'message' => 'Sesión cerrada exitosamente'
        ], 200);

    }
}

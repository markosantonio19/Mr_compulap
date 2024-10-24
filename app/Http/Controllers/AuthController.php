<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Valida las credenciales
        $credentials = $request->only('username', 'password');

        // Compara las credenciales
        if ($credentials['username'] === 'MR_COMPULAP' && $credentials['password'] === 'COMPULAP@2024') {
            // Inicia sesión
            Auth::loginUsingId(1); // Asumiendo que el usuario con ID 1 es MR_COMPULAP

            // Redirige a la página de inicio
            return redirect()->route('home');
        }

        // Si las credenciales son incorrectas, redirige de nuevo al formulario con un mensaje de error
        return redirect()->back()->withErrors(['login' => 'Credenciales incorrectas']);
    }
}

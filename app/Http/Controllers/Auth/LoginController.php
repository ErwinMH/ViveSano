<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Cliente;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

    public function showLoginForm()
    {
        if (Auth::guard('users')->check()) {
            // Si se autenticó como usuario, redirigir al dashboard
            return redirect('/planes');
        } elseif (Auth::guard('clients')->check()) {
            return redirect('/index');
        } else {
            return view('auth.login');
        }

        
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();
    
        // Verificar las credenciales en la tabla "users"
        $user = Auth::guard('users')->attempt($credentials);
        
        if ($user) {
            return $this->authenticated($request, $user, $user->rol );
        }

        // Si no se encontró en ninguna tabla, redirigir a la página de inicio de sesión con un mensaje de error
        return redirect()->to('/login')->withErrors('auth.failed');
    }
    
    public function authenticated(Request $request, $user, $rol)
    {
         if (Auth::guard('users')->check() && $rol == 1 ) {
           
            return redirect('/admin');
        } elseif (Auth::guard('users')->check()) {
            return redirect('/');
        } else {
           
            return redirect()->to('/login')->withErrors('auth.failed');
        }
    }

    public function logout(Request $request)
{
    Session::flush(); // Eliminar todos los datos de la sesión

    $request->session()->invalidate(); // Invalidar la sesión actual
    $request->session()->regenerateToken(); // Regenerar el token de sesión

    Auth::logout(); // Cerrar sesión del usuario autenticado


    return redirect('/login');
}

}


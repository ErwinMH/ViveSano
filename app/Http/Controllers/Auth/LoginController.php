<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Cliente;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    use AuthenticatesUsers;
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
           
            return redirect('/');
        } 

        
    }
 
    
    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();
    
        // Verificar las credenciales en el guardia por defecto (web)
        $authenticated = Auth::guard('users')->attempt($credentials);
    
        if ($authenticated) {
            return $this->authenticated($request);
        }
    
        // Si no se encontró en ninguna tabla, redirigir a la página de inicio de sesión con un mensaje de error
        return redirect()->to('/login2')->withErrors('auth.failed');
    }
    
    public function authenticated(Request $request)
    {
        if (Auth::guard('users')->check()) {
            $userId = Auth::user()->id;
    
            // Verificar si el ID de usuario de la sesión existe
            if ($userId) {
                $user = User::find($userId);
    
                // Verificar si se encontró un usuario con el ID de usuario de la sesión
                if ($user) {
                    $rol = $user->rol;
    
                    if ($rol == 1) {
                        return redirect('/admin');
                    } elseif ($rol == 2) {
                        return redirect('/');
                    }
                }
            }
        }
    
        return redirect()->to('/')->withErrors('auth.failed');
    }
    
    public function logout(Request $request)
{
    Session::flush(); // Eliminar todos los datos de la sesión

    $request->session()->invalidate(); // Invalidar la sesión actual
    $request->session()->regenerateToken(); // Regenerar el token de sesión

    Auth::logout(); // Cerrar sesión del usuario autenticado


    return redirect('/login2')->withErrors('auth.failed');
}

}


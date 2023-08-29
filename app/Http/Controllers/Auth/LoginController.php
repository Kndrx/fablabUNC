<?php

namespace App\Http\Controllers\Auth;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Instance a new LoginController instance
     */

    public function __construct(){
        $this->middleware('guest')->except([
            'logout', 'dashboard'
        ]);
    }

    /**
    * Login form
    */
    public function login(){
        return view('auth.login');
    }

    /**
    * Authenticate the admin
    */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('dashboard')
                ->withSuccess('Connexion réussie');
        }

        return back()->withErrors([
            'username' => 'Utilisateur inconnu.',
        ])->onlyInput('username');
    }

    /**
     * Return the connected admin to dashboard
     */
    public function dashboard()
    {
        if(Auth::check())
        {
            return view('auth.dashboard');
        }

        return redirect()->route('login')->withErrors([
            'Veuillez vous connecter pour afficher le tableau de bord.',
        ])->onlyInput('username');
    }

    /**
     * Logout the admin
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->withSucess('Déconnexion réussie!');
    }
}

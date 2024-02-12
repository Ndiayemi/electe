<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConnexionController extends Controller
{
    //
    // app/Http/Controllers/ConnexionAdminController.ph

    public function connexionad()
    {
        return view('connexion');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('espace-electeur');
        } else {
            // Authentification échouée, redirigez l'utilisateur vers la page de connexion avec des erreurs
            return redirect()->route('connexion')->withErrors([
                'email' => 'Les informations d\'identification fournies ne correspondent pas à nos enregistrements.',
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/')->with('success', 'Vous avez été déconnecté avec succès.');
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Candidat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EspaceElecteurController extends Controller
{
    //
    public function index(){
        return view("espace-electeur");
    }
   
    public function bulletinVote()
    {
        $candidats = Candidat::all();
        return view('bulletin_vote', compact('candidats'));
        if (Auth::check() && Auth::user()->isElecteur()) {
            $candidats = Candidat::all();
            return view('bulletin_vote', compact('candidats'));
        } else {
            // Redirigez l'utilisateur vers la page de connexion s'il n'est pas connecté en tant qu'électeur
            return redirect()->route('login')->with('error', 'Veuillez vous connecter en tant qu\'électeur pour accéder au bulletin de vote.');
        }
    }
    public function deconnexion()
    {
        Auth::logout(); // Déconnexion de l'utilisateur
        return redirect()->route('login')->with('success', 'Vous avez été déconnecté avec succès.');
    }
}
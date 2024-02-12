<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    //
    public function showForm(){
        return view("inscription");
    }
    // app/Http/Controllers/InscriptionController.php
    


    public function submitForm(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'numero_vote' => 'required|string|max:255|unique:users', // Assurez-vous que la colonne dans la table de la base de données correspondante est configurée comme unique
        ]);

        // Création de l'utilisateur
        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'numero_vote' => $request->numero_vote,
        ]);

        // Vous pouvez également ajouter d'autres étapes, par exemple, connecter l'utilisateur automatiquement, etc.

        // Redirection vers la page de confirmation d'inscription ou toute autre page
        // return redirect()->route('inscription')->with('success','Inscreiption enrégitrer avec succès!!!!');
        
        return redirect()->route('connexion')->with('success', 'Inscription enregistrée avec succès!');

    }
}


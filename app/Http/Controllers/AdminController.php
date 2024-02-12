<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function afficherFormulaireCreationUtilisateur()
    {
    return view('admin.creation_utilisateur');
    }
//     public function creerUtilisateur(Request $request)
// {
//     // Validez les données du formulaire

//     User::create([
//         'nom' => $request->nom,
//         'prenom' => $request->prenom,
//         'email' => $request->email,
//         'password' => bcrypt($request->password),
//         'numero_vote' => $request->numero_vote,
//         'role' => $request->role, // Assurez-vous d'avoir un champ "role" dans votre formulaire
//     ]);

//     return redirect()->route('admin.tableaudebord')->with('success', 'Utilisateur créé avec succès.');
// }
    // public function createUserForm()
    // {
    //     return view('admin.creation_utilisateur');
    // }

    public function createUser(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'numero_vote' => 'required|unique:users',
            'role' => 'required|in:utilisateur,admin',
        ]);

        // Création de l'utilisateur
        User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'numero_vote' => $request->numero_vote,
            'role' => $request->role,
        ]);

        // Redirection avec un message de succès
        return redirect()->route('admin.creation_utilisateur')->with('success', 'Utilisateur créé avec succès.');
    }
}

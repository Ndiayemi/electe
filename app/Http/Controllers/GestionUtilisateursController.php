<?php

// app/Http/Controllers/GestionUtilisateursController.php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class GestionUtilisateursController extends Controller
{
    public function index()
    {
        $utilisateurs = User::paginate(10); // ou le nombre que vous préférez

    return view('admin.Tableaudebord', compact('utilisateurs'));
    }
   
    public function create()
    {
        return view('admin.gestion_utilisateur.create');
    }
    

    public function store(Request $request)
    {
        // Validez les données du formulaire

        User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'numero_vote' => $request->numero_vote,
            'type' => $request->type, // Utilisez cette information pour distinguer les candidats des électeurs
        ]);

        return redirect()->route('admin.gestion_utilisateur.index')->with('success', 'Utilisateur créé avec succès.');
    }

    public function edit(User $utilisateur)
    {
        return view('admin.gestion_utilisateur.edit', compact('utilisateur'));
    }

    public function update(Request $request, User $utilisateur)
    {
        // Validez les données du formulaire

        $utilisateur->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'numero_vote' => $request->numero_vote,
            'type' => $request->type, // Utilisez cette information pour distinguer les candidats des électeurs
        ]);

        return redirect()->route('admin.gestion_utilisateur.index')->with('success', 'Utilisateur mis à jour avec succès.');
    }

    public function destroy(User $utilisateur)
    {
        $utilisateur->delete();
        return redirect()->route('admin.tableaudebord')->with('success', 'Utilisateur supprimé avec succès.');
    }
}

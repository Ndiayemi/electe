<?php
// app/Http/Controllers/EspaceCandidatController.php

namespace App\Http\Controllers;
use App\Mail\CandidatureSoumise;
use Illuminate\Support\Facades\Mail;

// ...
use Illuminate\Http\Request;
use App\Models\Candidat;

class EspaceCandidatController extends Controller
{
    public function index()
    {
        // Récupérer toutes les candidatures depuis la base de données
        $candidats = Candidat::all();
    
        // Afficher la vue avec la liste des candidatures
        return view('admin.gestion_candidat.index', compact('candidats'));
    }
    // app/Http/Controllers/EspaceCandidatController.php


    public function espaceindex()
    {
        // Afficher le formulaire de dépôt de candidature
        return view('espace_candidat');
    }

    public function create()
    {
        // Afficher le formulaire de dépôt de candidature
        return view('admin.gestion_candidat.create');
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:candidats',
            'password' => 'required|string|min:8|confirmed',
            'numero_vote' => 'required|string|max:255|unique:candidats',
            'programme' => 'required|file|mimes:pdf,doc,docx',
            // Ajoutez d'autres règles de validation selon vos besoins
        ]);
        $programmePath = $request->file('programme')->store('programmes', 'public');



        // Créer une nouvelle candidature dans la base de données
        $candidat = Candidat::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'numero_vote' => $request->numero_vote,
            'programme' => $programmePath,
            // 'type' => 'candidat', // Indique que c'est un candidat
        ]);
        // Mail::to($request->email)->send(new CandidatureSoumise($candidat));


        // Rediriger avec un message de succès
        return redirect()->route('candidatures.index')->with('success', 'Candidature déposée avec succès.');
    }



}

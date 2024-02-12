<?php
// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('formulaire-contact');
    }

    public function processForm(Request $request)
    {
        // Validez les données du formulaire
        $request->validate([
            'nom' => 'required|string',
            'email' => 'required|email',
            'sujet' => 'required|string',
            'message' => 'required|string',
        ]);

        // Logique de traitement des données (par exemple, envoi d'un e-mail, enregistrement en base de données, etc.)

        // Redirigez l'utilisateur après le traitement avec un message de succès
        return redirect('/formulaire-contact')->with('success', 'Votre message a été envoyé avec succès!');
    }
}


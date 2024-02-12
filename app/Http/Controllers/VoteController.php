<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vote;
use App\Models\Resultat;

class VoteController extends Controller
{
    public function showVoteForm()
    {
        // Récupérez les candidats à partir de votre modèle Candidat
        $candidats = \App\Models\Candidat::all();

        // Passez les candidats à la vue du formulaire de vote
        return view('vote', compact('candidats'));
    }

    public function submitVote(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'numero_vote' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'candidat' => 'required|exists:candidats,id',
        ]);

        $existingVote = Vote::where('numero_vote', $request->numero_vote)->first();
        if ($existingVote) {
            return redirect()->back()->with('error', 'Vous avez déjà voté.');
        }
        // Enregistrez le vote dans la table des votes
        $vote = Vote::create([
            'numero_vote' => $request->numero_vote,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'candidat_id' => $request->candidat,
        ]);

        // Mettez à jour le total des votes dans la table des résultats
        $resultat = Resultat::where('candidat_id', $request->candidat)->first();
        if ($resultat) {
            $resultat->increment('votes');
        } else {
            Resultat::create([
                'candidat_id' => $request->candidat,
                'votes' => 1,
            ]);
        }

        return redirect()->route('espace.electeur')->with('success', 'Vote soumis avec succès.');
    }
}



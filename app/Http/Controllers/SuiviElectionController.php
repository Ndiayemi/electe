<?php
// app/Http/Controllers/SuiviElectionController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resultat;

class SuiviElectionController extends Controller
{
    public function index()
    {
        // Récupérer les résultats avec les informations sur le candidat associé
        $resultats = Resultat::with('candidat')->get();

        // Passez les résultats à la vue
        return view('suivi-election', compact('resultats'));
    }

    public function showFAQ()
    {
        $faqs = [
            [
                'question' => 'Comment puis-je voter en ligne?',
                'reponse' => 'Connectez-vous à votre compte, accédez à la section de vote, puis suivez les instructions pour soumettre votre vote.',
            ],
            [
                'question' => 'Est-ce que je peux changer mon vote après l\'avoir soumis?',
                'reponse' => 'Non, une fois que vous avez soumis votre vote, il ne peut pas être modifié.',
            ],
            [
                'question' => 'Quand seront annoncés les résultats des élections?',
                'reponse' => 'Les résultats seront annoncés dès que le processus de dépouillement sera terminé. La date précise dépendra du type d\'élections.',
            ],
            [
                'question' => 'Comment puis-je devenir candidat aux élections?',
                'reponse' => 'Pour devenir candidat, vous devez soumettre une candidature via votre espace candidat. Assurez-vous de remplir tous les critères d\'éligibilité.',
            ],
            [
                'question' => 'Que faire si j\'ai des problèmes techniques lors du vote?',
                'reponse' => 'Si vous rencontrez des problèmes techniques, veuillez contacter notre support technique à support@example.com pour obtenir de l\'aide.',
            ],
        ];

        return view('faq', compact('faqs'));
    }
    
}



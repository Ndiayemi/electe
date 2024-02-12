<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Candidat;

class TableauDeBordAdminController extends Controller
{
    //
//     public function index()
//     {
//     $utilisateurs = User::all();
//     return view('admin.Tableaudebord', compact('utilisateurs'));
// }
public function connexionForm(){
    return view("connexionadmin");
}
public function connexion(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Authentification de l'utilisateur
    if (Auth::attempt($request->only('email', 'password'))) {
        // Vérification de l'email spécifique
        if (Auth::user()->email === 'ndjibril671@gmail.com') {
            return redirect('/admin.tableaudebord');
        } else {
            // Si l'utilisateur n'a pas l'email spécifié, déconnectez-le et redirigez-le
            Auth::logout();
            return back()->withErrors([
                'email' => 'Vous n\'avez pas l\'autorisation d\'accéder à cette page.',
            ]);
        }
    }

    return back()->withErrors([
        'email' => 'Les informations d\'identification fournies ne correspondent pas à nos enregistrements.',
    ]);
}
        public function deconnexion()
        {
            Auth::logout();

            return redirect('/')->with('success', 'Vous avez été déconnecté avec succès.');
        }


    public function acceuil()
    {
        return view('welcome');
    }public function indexe()
    {
        $candidats = Candidat::paginate(10);
        return view('admin.tableaudebord', compact('candidats'));
    }

  
    public function destroye(Candidat $candidat)
    {
        $candidat->delete();

        return redirect()->route('admin.tableaudebord')->with('success', 'Candidat supprimé avec succès.');
}

}







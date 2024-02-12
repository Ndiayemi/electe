<?php

use App\Http\Controllers\ConnexionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EspaceElecteurController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\EspaceCandidatController;
use App\Http\Controllers\TableauDeBordAdminController;
use App\Http\Controllers\GestionUtilisateursController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\PrivacyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// routes/web.php

// Route::get('/connexionadmin', [ConnexionController::class, 'showForm'])->name('connexion.form');
// Route::post('/connexionadmin', [ConnexionController::class, 'login'])->name('connexionad');
// Route::get('/deconnexion', [ConnexionController::class, 'logout'])->name('deconnexion');


// routes/web.php
use App\Http\Controllers\ContactController;

use App\Http\Controllers\SuiviElectionController;

// routes/web.php

// routes/web.php
// routes/web.php

Route::get('/politique-confidentialite', [PrivacyController::class, 'index'])->name('privacy');

Route::get('/conditions-utilisation', function () {
    return view('conditions');
})->name('conditions.utilisation');
Route::get('/faq', [SuiviElectionController::class, 'showFAQ'])->name('faq');

Route::get('/formulaire-contact', [ContactController::class, 'showForm'])->name('support');
Route::post('/traiter-formulaire', [ContactController::class, 'processForm'])->name('traiter.formulaire');

Route::get('/suivi-election', [SuiviElectionController::class, 'index'])->name('suivi.election');

Route::get('/', [TableauDeBordAdminController::class, 'acceuil'])->name('acceuil');
Route::get('/connexionadmin', [TableauDeBordAdminController::class, 'connexionForm'])->name('connexion.form');
Route::post('/connexionadmin', [TableauDeBordAdminController::class, 'connexion'])->name('connexionadmin');

Route::get('/connexion', [ConnexionController::class, 'connexionad'])->name('connexion');
Route::post('/connexion', [ConnexionController::class, 'login'])->name('login');

// Route pour afficher le formulaire d'inscription
Route::get('/inscription-electeurs', [InscriptionController::class, 'showForm'])->name('inscription.form');

// Route pour traiter la soumission du formulaire
Route::post('/inscription-electeurs', [InscriptionController::class, 'submitForm'])->name('inscription.submit');
// web.php ou routes.php

Route::get('/inscription', [InscriptionController::class, 'showForm'])->name('inscription');
Route::post('/inscription', [InscriptionController::class, 'submitForm']);


Route::get('/bulletin.vote', [EspaceElecteurController::class, 'bulletinVote'])->name('bulletin.vote');
Route::get('/espace-electeur',[EspaceElecteurController::class, 'index'])->name('espace.electeur');

Route::get('/inscriptioncandidat', [EspaceCandidatController::class, 'index'])->name('inscription.candidat');
// Route::post('/inscription-candidat', 'InscriptionCandidatController@store')->name('inscription.candidat.store');

// Route::get('/espace-candidat', [EspaceCandidatController::class,'candidat'])->name('espace.candidat');
// Route::post('/candidat-depot', [EspaceCandidatController::class,'depotcandidat'])->name('candidat.depot');

Route::get('/admin.tableaudebord', [TableauDeBordAdminController::class, 'index'])->name('admin.tableaudebord');
Route::get('/admin/gestion_utilisateur.index',[GestionUtilisateursController::class, 'index'])->name('admin.gestion_utilisateur.index');
// Routes pour la gestion des utilisateurs
Route::get('/create', [TableauDeBordAdminController::class, 'create'])->name('create');

    // Route::get('/create', [GestionUtilisateursController::class, 'create'])->name('create');
    Route::post('/store', [GestionUtilisateursController::class, 'store'])->name('store');
    Route::get('/{utilisateur}/edit', [GestionUtilisateursController::class, 'edit'])->name('edit');
    Route::put('/{utilisateur}/update', [GestionUtilisateursController::class, 'update'])->name('update');
    Route::delete('/{utilisateur}/destroy', [GestionUtilisateursController::class, 'destroy'])->name('destroy');



Route::get('/admin.tableaudebord', [TableauDeBordAdminController::class,'index'])->name('admin.tableaudebord');

// Routes pour la gestion des électeurs
Route::get('/candidatures/index', [EspaceCandidatController::class, 'index'])->name('candidatures.index');


Route::get('/espace_candidat', [EspaceCandidatController::class, 'espaceindex'])->name('espace_candidat');

Route::get('/candidatures/create', [EspaceCandidatController::class, 'create'])->name('candidatures.create');
Route::post('/candidatures/store', [EspaceCandidatController::class, 'store'])->name('candidatures.store');


Route::get('/bulletin-vote', [VoteController::class, 'showVoteForm'])->name('vote.form');
Route::post('/submit-vote', [VoteController::class, 'submitVote'])->name('submitVote');


// Route::get('/bulletin_vote', [VoteController::class, 'showVoteForm'])->name('vote.form');
// Route::post('/submit-vote', [VoteController::class, 'submitVote'])->name('submitVote');

Route::get('/deconnexion', [TableauDeBordAdminController::class, 'deconnexion'])->name('deconnexion');


Route::get('/admin.tableaudebord', [TableauDeBordAdminController::class, 'indexe'])->name('admin.tableaudebord');

Route::get('/{candidat}/edit', [TableauDeBordAdminController::class, 'edit'])->name('edit');
Route::delete('/{candidat}/destroye', [TableauDeBordAdminController::class, 'destroye'])->name('destroye');




// Changez ceci
Route::get('/admin/tableaudebord', [TableauDeBordAdminController::class, 'indexe'])->name('admin.tableaudebord');

// Par quelque chose comme
Route::get('/admin/tableaudebord/candidats', [TableauDeBordAdminController::class, 'indexe'])->name('admin.tableaudebord');

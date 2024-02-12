<!-- resources/views/espace_electeur.blade.php -->
<style>
    .alert-success {
    background-color: #d4edda;
    border: 1px solid #c3e6cb;
    color: #155724;
    padding: 20px;
    text-align: center;
    margin-top: 10px;
}
</style>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@extends('layouts.app')

@section('content')
    
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="espace-electeur-container">
        <div class="error">
            @if ($errors->any())
                <div style="color: red;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </div>
            @endif
        </div>
        <h1>Espace Électeur</h1>
        
        <!-- Affichage des informations électorales personnelles -->
        <div class="informations-personnelles">
            <!-- Ajoutez ici le code pour afficher les informations personnelles de l'électeur -->
            <!-- Par exemple : Nom, Prénom, Numéro de vote, etc. -->
        </div>

        <!-- Accès au bulletin de vote électronique -->
        <div class="acces-bulletin">
            <h2>Accès au Bulletin de Vote Électronique</h2>
            <p>Vous pouvez accéder à votre bulletin de vote électronique en cliquant sur le lien ci-dessous :</p>
            @auth
            <a href="{{ route('bulletin.vote') }}">Bulletin de Vote Électronique</a>
            <!-- Ajoutez ce lien là où vous voulez afficher le lien de déconnexion dans votre vue -->
            <br><br>
            <a href="{{ route('deconnexion') }}">Déconnexion</a>
            @else
            <p>Connectez-vous en tant qu'électeur pour accéder au bulletin de vote.</p>
            @endauth
        </div>


        <div class="instructions-vote">
            <h2>Instructions sur le Processus de Vote</h2>
            <p>
                Merci de suivre attentivement les instructions ci-dessous pour participer au processus de vote électronique :
            </p>
            <ol>
                <li>Connectez-vous à votre Espace Électeur.</li>
                <li>Cliquez sur le lien "Accès au Bulletin de Vote Électronique".</li>
                <li>Consultez attentivement les candidats et faites vos choix de vote.</li>
                <li>Cliquez sur le bouton de soumission pour enregistrer votre vote.</li>
                <li>Vous recevrez une confirmation de votre vote.</li>
            </ol>
            <p>
                En cas de problème ou de question, n'hésitez pas à contacter notre support.
            </p>
        </div>
    </div>
        </div>
    </div>
@endsection

<!-- resources/views/espace_candidat.blade.php -->
<link rel="stylesheet" href="{{asset('css\style.css')}}">
<style>
    span{
        background: blue;
        border: 1px;
        padding: 10px;border-radius: 5px;
        text-decoration: none;
        /* pointer-events: none; */
        text-decoration-line: none;
        color: aliceblue;
    }
</style>
@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Espace Candidat</h1>
        <!-- Exemple de lien dans une autre vue -->
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Processus de Dépôt de Candidature</h2>
                <p>
                    Bienvenue dans l'Espace Candidat. Vous pouvez déposer votre candidature en suivant ces étapes :
                </p>
                <ol>
                    <li>Accédez à l'Espace Candidat en cliquant sur le lien suivant :</li>
                    <span><a href="{{ route('candidatures.create') }}" class="quick-link-btn">Dépôt candidature</a></span>
                </li>
                    <li>Remplissez le formulaire de dépôt de candidature avec vos informations personnelles.</li>
                    <li>Téléchargez les documents pertinents pour votre candidature.</li>
                    <li>Soumettez le formulaire.</li>
                    <li>Vous recevrez une notification confirmant la réception de votre candidature.</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

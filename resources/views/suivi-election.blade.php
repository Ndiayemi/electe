<!-- resources/views/resultats/index.blade.php -->
<link rel="stylesheet" href="css/resultat.css">
<link rel="stylesheet" href="css/style.css">
<style>
    .alert-success {
    background-color: #d4edda;
    border: 1px solid #c3e6cb;
    color: #155724;
}
</style>
@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Résultats des élections</h1>
        <hr>

        <table class="table">
            @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
            <thead>
                <tr>
                    <th scope="col">Candidat</th>
                    <th scope="col">Nombre de Voix</th>
                </tr>
            </thead>
            <tbody>
                @foreach($resultats as $resultat)
                    <tr>
                        <td>{{ $resultat->candidat->prenom }} {{ $resultat->candidat->nom }}</td>
                        <td>{{ $resultat->votes }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

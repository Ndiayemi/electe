<!-- resources/views/candidatures/create.blade.php -->

<link rel="stylesheet" href="{{ asset('css/candidat.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Déposer une Candidature</h1>
        <hr>
        @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
        @endif
            @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>
            @endif
                <form action="{{ route('candidatures.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group">
                        <label for="nom">Nom :</label>
                        <input type="text" class="form-control" name="nom" id="nom" required>
                    </div>

                    <div class="form-group">
                        <label for="prenom">Prénom :</label>
                        <input type="text" class="form-control" name="prenom" id="prenom" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Mot de passe :</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirmer le mot de passe :</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
                    </div>

                    <div class="form-group">
                        <label for="numero_vote">Numéro de vote :</label>
                        <input type="text" class="form-control" name="numero_vote" id="numero_vote" required>
                    </div>

                    <div class="form-group">
                        <label for="programme">Programme :</label>
                        <input type="file" class="form-control" name="programme" id="programme" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Déposer la Candidature</button>
                </form>
            </div>
        @endsection

<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <link rel="stylesheet" href="{{ asset('css/ajouter.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @extends('layouts.app')

    @section('content') 
    <h2>Connexion</h2>

    {{-- @if (Auth::check())
        <p>Connecté en tant que {{ Auth::user()->email }} (<a href="{{ route('deconnexion') }}">Déconnexion</a>)</p>
    @else
        <div class="error">
            @if ($errors->any())
                <div style="color: red;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </div>
            @endif
        </div> --}}

        <form method="POST" action="{{ route('login') }}" autocomplete="off">
            @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
            @csrf
            <label for="email">Email :</label>
            <input type="email" name="email" required>
            <br>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" required>
            <br>
            <button type="submit">Se connecter</button>
        </form>
    {{-- @endif --}}
    @endsection
</body>
</html>


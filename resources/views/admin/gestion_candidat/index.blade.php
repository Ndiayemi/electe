<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- resources/views/admin/candidatures/index.blade.php -->

<!-- resources/views/admin/candidatures/index.blade.php -->

            @extends('layouts.app')

            @section('content')
                <div class="container mt-4">
                    <h1>Liste des Candidats</h1>
                    <hr>
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                    @if($candidats && count($candidats) > 0)
                        <ul>
                            @foreach($candidats as $candidat)
                            <h3>{{ $candidat->prenom }} {{ $candidat->nom }}</h3>
                            @endforeach
                        </ul>
                    @else
                        <p>Aucun candidat inscrit pour le moment.</p>
                    @endif
                </div>
            @endsection

</body>
</html>
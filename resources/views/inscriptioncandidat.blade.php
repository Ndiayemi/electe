<!-- resources/views/espace_candidat.blade.php -->

@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <div class="container mt-5">
        <h1 class="mb-4">Espace Candidat</h1>

        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Dépôt de Candidature en Ligne</h2>
                <form action="{{ route('candidat.depot') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="nom">Nom :</label>
                        <input type="text" name="nom" id="nom" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="prenom">Prénom :</label>
                        <input type="text" name="prenom" id="prenom" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="parti_politique">Parti Politique :</label>
                        <input type="text" name="parti_politique" id="parti_politique" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="documents">Télécharger des Documents :</label>
                        <input type="file" name="documents" id="documents" class="form-control-file" accept=".pdf, .doc, .docx">
                    </div>

                    <button type="submit" class="btn btn-primary">Soumettre la Candidature</button>
                </form>
            </div>
        </div>
    </div>
@endsection

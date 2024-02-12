
<link rel="stylesheet" href="{{ asset('css/bulletin.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Formulaire de Vote</h1>
        <hr>
        <div class="error">
        @if ($errors->any())
            <div style="color: red;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        @endif
    </div>
        <form action="{{ route('submitVote') }}" method="POST">
            @csrf
                @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <div class="form-group">
                <label for="numero_vote">Numéro de Vote :</label>
                <input type="text" class="form-control" name="numero_vote" id="numero_vote" required>
            </div>

            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" name="nom" id="nom" required>
            </div>

            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" class="form-control" name="prenom" id="prenom" required>
            </div>

            <div class="form-group">
                <label for="candidat">Choisir un candidat :</label>
                <select class="form-control" name="candidat" id="candidat" required>
                    @foreach($candidats as $candidat)
                        <option value="{{ $candidat->id }}">{{ $candidat->prenom }}  {{ $candidat->nom }} </option>
                    @endforeach
                </select>
            </div>

            <div class="input-group">
                <button type="submit" class="btn btn-primary">Voter</button>
            </div>
        </form>
    </div>
@endsection


<!-- resources/views/admin/creation_utilisateur.blade.php -->

@extends('layouts.app')  <!-- Assurez-vous que cette vue utilise le layout approprié -->

@section('content')
    <div class="container mt-4">
        <h1>Création d'Utilisateur</h1>
        <hr>

        <!-- Formulaire de création d'utilisateur -->
        <form method="post" action="{{ route('admin.creer_utilisateur') }}">
            @csrf  <!-- Ajoutez le jeton CSRF pour la sécurité -->

            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>

            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            {{-- <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div> --}}

            <div class="mb-3">
                <label for="numero_vote" class="form-label">Numéro de Vote</label>
                <input type="text" class="form-control" id="numero_vote" name="numero_vote" required>
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">Rôle</label>
                <select class="form-select" id="role" name="role" required>
                    <option value="utilisateur">Utilisateur</option>
                    <option value="admin">Administrateur</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Créer Utilisateur</button>
        </form>
    </div>
@endsection

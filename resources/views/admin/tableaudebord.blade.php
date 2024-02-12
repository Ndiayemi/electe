<!-- resources/views/admin/tableau_de_bord.blade.php -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<style>
        .table .programme-col {
        max-width: 200px; /* Ajustez la largeur maximale selon vos besoins */
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
</style>
@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

    <a href="{{ route('deconnexion') }}">Déconnexion</a>

            <h1>Gestion des Candidats</h1>

        <!-- Tableau pour afficher la liste des utilisateurs -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Numéro de Vote</th>
                    <th scope="col">Programme</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($candidats))
                 
                    @forelse($candidats as $candidat)
                    <tr>
                        <td>{{ $candidat->id }}</td>
                        <td>{{ $candidat->nom }}</td>
                        <td>{{ $candidat->prenom }}</td>
                        <td>{{ $candidat->email }}</td>
                        <td>{{ $candidat->numero_vote }}</td>
                        <td class="programme-col">{{ $candidat->programme }}</td>
                        <td>
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-fz2mmGI4mlYsJ+Lb1eBX2EVVYfFDRsYoH6d5jZbr9smhsPdC2R3QVJbJ5zH2M8f5" crossorigin="anonymous">
                                <div class="btn-group" role="group">
                                    <form action="{{ route('edit', $candidat) }}" method="GET" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-warning btn-sm">
                                            Éditer <i class="fas fa-edit"></i>
                                        </button>
                                    </form>
                            
                                    <form action="{{ route('destroye', $candidat) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">
                                            Supprimer <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Aucun candidat trouvé.</td>
                    </tr>
                @endforelse
            @endif
            </tbody>
        </table>
            <script>
                document.getElementById('createUserLink').addEventListener('click', function() {
                    var form = document.getElementById('createUserForm');
                    form.style.display = (form.style.display === 'none' || form.style.display === '') ? 'block' : 'none';
                });
            </script>
            {{ $candidats->links() }}

</div>
@endsection

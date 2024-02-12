<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Éditeur d'utilisateur</title>
    <link rel="stylesheet" href="{{ asset('css/ajout.css') }}">
</head>
<body>
    
    <form action="{{ route('inscription.submit') }}" method="POST">
        @csrf
        <center><h1>Ajout d'un utilisateur</h1></center>
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
            <label for="mot_de_passe">Mot de passe :</label>
            <input type="password" class="form-control" name="password" id="mot_de_passe" required>
        </div>
    
        <div class="form-group">
            <label for="confirmer_mot_de_passe">Confirmer le mot de passe :</label>
            <input type="password" class="form-control" name="password_confirmation" id="confirmer_mot_de_passe" required>
        </div>
    
        <div class="form-group">
            <label for="numero_vote">Numéro de vote :</label>
            <input type="text" class="form-control" name="numero_vote" id="numero_vote" required>
        </div>
    
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
    </div>
</body>
</html>
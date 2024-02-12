<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <link rel="stylesheet" href="{{ asset('css/ajouter.css') }}">
    <style>
        .alert-success {
        background-color: #d4edda;
        border: 1px solid #c3e6cb;
        color: #155724;
    }
    </style>
</head>
<body bgcolor="white">
    <br><br>
        <h2>Connexion</h2>
      
    <div class="error">
        @if ($errors->any())
            <div style="color: red;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        @endif
    </div>
      
        
        <form method="POST" action="{{ route('connexion') }}" autocomplete="off">
            @csrf
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <label for="email">Email :</label>
            <input type="email" name="email" required>
            <br>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" required>
            <br>
            <button type="submit">Se connecter</button>
        </form>
    
</body>
</html>

<!-- resources/views/conditions.blade.php -->
<style>
    /* public/css/styles.css */

/* Style de base pour la page */
body {
    font-family: Arial, sans-serif;
}

.container {
    max-width: 800px;
    margin: 0 auto;
}

/* Style spécifique pour la page des conditions d'utilisation */
.container {
    padding: 20px;
    background-color: #f8f8f8;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #333;
}

h3 {
    color: #555;
}

p {
    color: #666;
}

</style>
<link rel="stylesheet" href="css/style.css">
@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Conditions d'Utilisation</h1>
        <hr>

        <p>
            Bienvenue sur notre plateforme de gestion des élections. En accédant à ce site, vous acceptez de vous conformer
            aux conditions d'utilisation suivantes. Ces conditions peuvent être modifiées à tout moment, veuillez les consulter régulièrement.
        </p>

        <h3>1. Utilisation du site</h3>
        <p>
            Vous acceptez d'utiliser ce site uniquement à des fins légales et conformément à ces conditions d'utilisation.
        </p>

        <h3>2. Confidentialité</h3>
        <p>
            Veuillez consulter notre politique de confidentialité pour comprendre comment nous collectons, utilisons et protégeons vos données personnelles.
        </p>


    </div>
@endsection

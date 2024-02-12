<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Plateforme des Élections</title>
    <style>
        .alert-success {
        background-color: #d4edda;
        border: 1px solid #c3e6cb;
        color: #155724;
    }
    </style>
</head>
<body bgcolor="aqua">
    <header class="banner">
        <img src="{{ asset('images/logo.png') }}" alt="Logo de la plateforme" class="logo">
        <h1>Votre voix compte, votez avec confiance.</h1>
    </header>

    <div class="quick-links">
        @if(Auth::check())
            <a href="{{ url('/admin.tableaudebord') }}" class="quick-link-btn">Tableau de bord administrateur</a>
            @else
            <a href="{{ url('/inscription-electeurs') }}" class="quick-link-btn">Inscription des électeurs</a>
            <a href="{{ url('/espace-electeur') }}" class="quick-link-btn">Espace électeur</a>
            <a href="{{ route('espace_candidat') }}" class="quick-link-btn">Espace candidat</a>
            <a href="{{ route('suivi.election') }}" class="quick-link-btn">Suivi des élections</a>    
            <a href="{{route('connexion')}}"  class="quick-link-btn">Connexion</a>
            @endif
    </div>

        <div class="container">
            <!-- ... (votre code existant) ... -->

<!-- ... (votre code existant) ... -->

            <div class="description">
                <h1>Bienvenue sur la Plateforme des Élections</h1>
                <p>
                    Notre mission est de faciliter un processus électoral transparent, 
                    accessible et sûr pour tous. En intégrant des technologies de pointe,
                    nous offrons une solution numérique qui permet aux citoyens de participer 
                    activement à la démocratie. Que vous soyez un électeur cherchant à exercer
                    votre droit de vote de manière pratique ou un candidat aspirant à servir votre 
                    communauté, notre plateforme fournit les outils nécessaires pour créer une expérience 
                    électorale robuste et équitable. Nous croyons en la puissance de la démocratie 
                    participative, et c'est avec cet engagement que nous travaillons à moderniser et à 
                    renforcer le processus électoral pour tous. Joignez-vous à nous dans la construction 
                    d'un avenir où chaque voix compte, et où la démocratie 
                    prospère grâce à l'innovation et à l'inclusion.</p>
            </div>



            <div class="feature">
                <h2>Accessible á tous</h2>
                <img src="{{asset('/images/icone1.png')}}" alt="Avantage1">
                <p>La plateforme est accessible H24 7J/7 n'importe oú pour n'importe qui.</p>

                <h2>Sécurité renforcée</h2>
                <img src="{{ asset('/images/icone2.png') }}" alt="Avantage 2">
                <p>Votre vote est sécurisé grâce à des technologies de chiffrement avancées.</p>
            </div>

            <div class="feature">
                <h2>Transparence totale</h2>
                <img src="{{ asset('/images/icone3.png') }}" alt="Avantage 3">
                <p>Nous garantissons un processus électoral transparent et vérifiable.</p>
            </div>
        </div>
    </div>
            
        <!-- Reste du contenu de la page -->
    </div>
    <footer>
        <div class="footer-links">
            <a href="{{ url('/faq') }}" class="footer-link">FAQ</a>
            <a href="{{ url('/formulaire-contact') }}" class="footer-link">Support</a>
        </div>
    
        <div class="legal-links">
            <a href="{{ url('/politique-confidentialite') }}" class="footer-link">Politique de confidentialité</a>
            <a href="{{ url('/conditions-utilisation') }}" class="footer-link">Conditions d'utilisation</a>
        </div>
    
        <div class="contact-info">
            <p>Contact pour le support client : support@gestion_élection.com</p>
        </div>
    
        <div class="copyright-info">
            <p>&copy; {{ date('Y') }} Gestion Élections. Tous droits réservés.</p>
        </div>
    </footer

</body>
</html>

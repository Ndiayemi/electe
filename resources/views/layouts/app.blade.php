<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Votre Application')</title>
    <!-- Ajoutez ici vos liens CSS, scripts, etc. -->
</head>
<body>
    <header>
        <div class="quick-links">

            @if(Auth::check())
                // Vérification de l'email spécifique
                    @if (Auth::user()->email === 'ndjibril671@gmail.com') {
                    {{-- return redirect('/admin.tableaudebord'); --}}
                    <a href="{{ url('/admin.tableaudebord') }}" class="quick-link-btn">Tableau de bord administrateur</a>
                    
                    }
                @endif
            @else
            <a href="{{ url('/') }}" class="quick-link-btn">Acceuil</a>
            <a href="{{ url('/inscription-electeurs') }}" class="quick-link-btn">Inscription des électeurs</a>
            <a href="{{ url('/espace-electeur') }}" class="quick-link-btn">Espace électeur</a>
            <a href="{{ route('espace_candidat') }}" class="quick-link-btn">Espace Candidat</a>
            <a href="{{ route('suivi.election') }}" class="quick-link-btn">Suivi des élections</a>    
            <a href="{{route('connexion')}}"  class="quick-link-btn">Connexion</a>
            @endif
        </div>
    </header>
    <!-- Autres balises head... -->
    <!-- Ajoutez le CDN Bootstrap ci-dessous -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Tw0v4jNj00lV9v5aESlo/lFpu2aVC6LKt+AZaG9MIq6gBq8+MyF62D2B6XsBZm49" crossorigin="anonymous">
</head>
<body>
    <!-- Contenu principal de votre application -->

    <!-- Scripts Bootstrap (ajoutez-les juste avant la balise de fermeture body) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-rq04JMWLZHvFlU5zOF0iJ0sVTnT0QL2D98y0WblCsSyC4Cgrrz3YOKNpx2bFCjD4" crossorigin="anonymous"></script>



    <main>
        <!-- Contenu spécifique à chaque page sera inséré ici -->
        @yield('content')
    </main>
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
    </footer>
    <!-- Ajoutez ici vos scripts JavaScript, etc. -->
</body>
</html>

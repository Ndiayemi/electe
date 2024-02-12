<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Vérifiez si l'utilisateur est un administrateur
        if ($request->user() && $request->user()->role === 'admin') {
            return $next($request);
        }

        // Redirigez vers la page d'accueil ou une autre page appropriée pour les utilisateurs non autorisés
        return redirect('/');
    }
}


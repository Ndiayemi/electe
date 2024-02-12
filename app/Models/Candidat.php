<?php

namespace App\Models;
// use App\Models\Resultat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Resultat;
class Candidat extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guard = 'candidat';
    protected $fillable = [
        'nom', 'prenom', 'email', 'password', 'numero_vote', 'programme',
    ];

    protected $table = 'candidats';

    public function resultats()
    {
        return $this->hasMany(Resultat::class);
    }


}



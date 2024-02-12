<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Resultat;
use App\Models\Candidat;

    // use HasFactory;
    // protected $fillable = ['id',  'candidat_id','nom','numero_vote', 'prenom', 'created_at', 'update_at'];


    // protected $table = 'votes';

    // public function candidat()
    // {
    //     return $this->belongsTo(Candidat::class);
    // }
 
    // app/Models/Vote.php

class Vote extends Model
{
    // ...

    protected $fillable = ['user_id', 'numero_vote', 'nom', 'prenom', 'candidat_id', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

    // use HasFactory;

    // protected $table = 'votes';

    // // Relation avec le candidat
    // public function candidat()
    // {
    //     return $this->belongsTo(Candidat::class);
    // }
// }

    

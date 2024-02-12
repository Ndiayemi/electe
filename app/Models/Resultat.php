<?php
namespace App\Models;
use App\Models\Candidat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultat extends Model
{
    use HasFactory;

    protected $table = 'resultats'; 

    protected $fillable = ['candidat_id', 'votes'];

    public function candidat()
    {
        return $this->belongsTo(Candidat::class, 'candidat_id');
    }
}


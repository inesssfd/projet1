<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    protected $fillable = [
        'dateRapport', 'motif', 'bilan', 'idVisiteur', 'idMedecin'
    ];

    // Relation avec le modèle Medecin
    public function medecin()
    {
        return $this->belongsTo(Medecin::class, 'idMedecin');
    }
}

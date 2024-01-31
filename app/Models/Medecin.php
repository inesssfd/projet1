<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
    protected $fillable = [
        'nom', 'prenom', 'adresse', 'ville', 'cp_medecin', 'tel', 'specialisteComplementaire', 'departement'
    ];

    // Définir des relations avec d'autres modèles si nécessaire
    // Par exemple, un médecin peut avoir plusieurs rapports
    public function rapports()
    {
        return $this->hasMany(Rapport::class, 'idMedecin');
    }
}

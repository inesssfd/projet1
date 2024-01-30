<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Visiteur extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;

    protected $table = 'visiteurs';
    protected $primaryKey = 'idVisiteur';
    protected $fillable = [
        'nomVisiteur', 
        'prenomVisiteur', 
        'login', 
        'mdp', 
        'adresseVisiteur', 
        'villeVisiteur', 
        'cp_visiteur', 
        'dateEmbaucheVisiteur',
    ];

    public function attemptLogin($credentials)
    {
        return $this->where('login', $credentials['login'])
                    ->where('mdp', $credentials['mdp'])
                    ->first();
    }
}

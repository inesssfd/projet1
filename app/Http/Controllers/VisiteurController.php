<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Visiteur;

class VisiteurController extends Controller
{
    // Méthode pour afficher le formulaire d'inscription
    public function showRegistrationForm()
    {
        return view('inscription');
    }

    // Méthode pour traiter les données soumises du formulaire
    public function register(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'nomVisiteur' => 'required|string|max:50',
            'prenomVisiteur' => 'required|string|max:50',
            'login' => 'required|string|max:50|unique:visiteurs',
            'mdp' => 'required|string|max:50',
            'adresseVisiteur' => 'nullable|string|max:50',
            'villeVisiteur' => 'nullable|string|max:50',
            'cp_visiteur' => 'nullable|integer',
            'dateEmbaucheVisiteur' => 'nullable|date',
        ]);
    
        // Créer un nouvel enregistrement de visiteur dans la base de données
        Visiteur::create($validatedData);
    
     // Rediriger l'utilisateur après l'inscription
return redirect()->route('acceuil'); // ou return redirect('/acceuil');

    }
    public function showLoginForm()
{
    return view('connexion');
}

public function login(Request $request)
{
    $credentials = $request->validate([
        'login' => 'required|string',
        'mdp' => 'required|string',
    ]);

    $user = (new Visiteur)->attemptLogin($credentials);

    if ($user) {
        // Connexion réussie
        Auth::login($user);
        return redirect('/acceuil');
    } else {
        // Échec de la connexion
        return redirect()->route('login.form')->with('error', 'Login ou mot de passe incorrect.');
    }
}
}

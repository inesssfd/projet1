<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rapport;
use App\Models\Medecin;
use Illuminate\Support\Facades\Auth;

class RapportController extends Controller
{
    public function create()
    {
        $medecins = Medecin::all();
        return view('create-rapport', compact('medecins'));
    }
    
    public function store(Request $request)
    {
        // Récupérer l'ID du visiteur connecté
        $idVisiteur = Auth::id();

        // Valider les données du formulaire et inclure l'ID du visiteur
        $validatedData = $request->validate([
            'dateRapport' => 'required|date',
            'motif' => 'required|string',
            'bilan' => 'required|string',
            'idMedecin' => 'required|exists:medecins,id',
            // Ajoutez d'autres règles de validation selon vos besoins
        ]);

        // Ajouter l'ID du visiteur aux données validées
        $validatedData['idVisiteur'] = $idVisiteur;

        // Créer un nouveau rapport avec les données validées
        Rapport::create($validatedData);

        // Rediriger vers une page de confirmation ou une autre page appropriée
        return redirect()->route('acceuil')->with('success', 'Rapport créé avec succès!');
    }
}

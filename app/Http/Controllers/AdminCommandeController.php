<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class AdminCommandeController extends Controller
{
    public function index(Request $request)
    {
        $recherche = $request->query('recherche');

        $commandes = Commande::query()
            ->when($recherche, function ($query, $recherche) {
                $query->where('numero', 'like', "%{$recherche}%")
                      ->orWhere('nom_complet', 'like', "%{$recherche}%")
                      ->orWhere('telephone', 'like', "%{$recherche}%");
            })
            ->latest()
            ->get();

        return view('admin-commandes', [
            'commandes' => $commandes,
            'recherche' => $recherche,
        ]);
    }

    public function changerStatut(Request $request, Commande $commande)
    {
        $request->validate(['statut' => 'required|string']);
        $commande->update(['statut' => $request->statut]);
        return back()->with('succes', 'Statut mis à jour.');
    }
}

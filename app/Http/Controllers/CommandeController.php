<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class CommandeController extends Controller
{
    public function store(Request $request)
    {
        try {
            $donnees = $request->validate([
                'nom_complet' => 'required|string|max:255',
                'telephone'   => 'required|string|max:30',
                'adresse'     => 'required|string|max:500',
                'paiement'    => 'required|string|max:100',
                'produits'    => 'required|array|min:1',
                'total'       => 'required|numeric|min:0',
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Champs invalides.',
                'erreurs' => $e->errors(),
            ], 422);
        }

        $numero = '#BJ' . now()->year . str_pad(
            (Commande::whereYear('created_at', now()->year)->count() + 1),
            3,
            '0',
            STR_PAD_LEFT
        );

        $commande = Commande::create([
            'client_id'   => Auth::guard('client')->id(),
            'numero'      => $numero,
            'nom_complet' => $donnees['nom_complet'],
            'telephone'   => $donnees['telephone'],
            'adresse'     => $donnees['adresse'],
            'paiement'    => $donnees['paiement'],
            'produits'    => $donnees['produits'],
            'total'       => $donnees['total'],
        ]);

        return response()->json([
            'numero' => $commande->numero,
        ], 201);
    }
}

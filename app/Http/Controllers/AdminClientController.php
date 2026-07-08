<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class AdminClientController extends Controller
{
    public function index(Request $request)
    {
        $recherche = $request->query('recherche');

        $clients = Client::query()
            ->when($recherche, function ($query, $recherche) {
                $query->where('nom', 'like', "%{$recherche}%")
                      ->orWhere('email', 'like', "%{$recherche}%");
            })
            ->orderByDesc('created_at')
            ->get();

        return view('admin-clients', [
            'clients' => $clients,
            'recherche' => $recherche,
            'totalClients' => Client::count(),
        ]);
    }

    public function supprimer(Client $client)
    {
        $client->delete();
        return redirect()->route('admin.clients')->with('succes', 'Client supprimé.');
    }
}

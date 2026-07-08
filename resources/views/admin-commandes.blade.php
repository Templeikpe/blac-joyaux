<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commandes — Admin Blac Joyaux</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family:'Poppins',sans-serif; background:#F5ECD7; }
        .titre { font-family:'Playfair Display',serif; }
    </style>
</head>
<body>

<!-- HEADER ADMIN -->
<header class="border-b border-gray-400 bg-white">
    <div class="flex items-center justify-between h-16 px-7">
        <a href="/admin" class="font-bold text-2xl" style="color:#3D2314">Blac Joyaux <span class="text-sm font-normal text-gray-400">Admin</span></a>
        <nav class="flex items-center gap-6 text-sm font-medium" style="color:#3D2314">
            <a href="{{ route('admin.commandes') }}" class="font-bold" style="color:#E8820C">Commandes</a>
            <a href="{{ route('admin.clients') }}" class="hover:text-orange-700">Clients</a>
        </nav>
    </div>
</header>

<section class="px-6 py-8">
    <div class="max-w-6xl mx-auto">

        <!-- EN-TÊTE -->
        <div class="flex flex-col md:flex-row justify-between md:items-center gap-4 mb-6">
            <div>
                <h1 class="text-2xl font-bold titre" style="color:#3D2314">Commandes</h1>
                <p class="text-sm text-gray-500">{{ $commandes->count() }} commande(s) au total</p>
            </div>

            <form method="GET" action="{{ route('admin.commandes') }}" class="flex gap-2">
                <input type="text" name="recherche" value="{{ $recherche }}" placeholder="Rechercher par numéro, nom ou téléphone..."
                       class="px-4 py-2 rounded-lg border border-gray-300 text-sm outline-none focus:border-[#3D2314] w-72">
                <button type="submit" class="text-white text-sm px-4 py-2 rounded-lg" style="background:#3D2314">
                    <i class="fas fa-search"></i>
                </button>
                @if($recherche)
                    <a href="{{ route('admin.commandes') }}" class="text-sm px-4 py-2 rounded-lg border border-gray-300" style="color:#3D2314">
                        Réinitialiser
                    </a>
                @endif
            </form>
        </div>

        @if(session('succes'))
            <div class="bg-green-50 text-green-700 text-sm rounded-lg p-3 mb-4">{{ session('succes') }}</div>
        @endif

        <!-- TABLEAU -->
        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
            @if($commandes->isEmpty())
                <div class="p-10 text-center text-gray-400 text-sm">
                    Aucune commande trouvée.
                </div>
            @else
                <table class="w-full text-sm">
                    <thead>
                        <tr class="text-left text-xs uppercase tracking-widest text-gray-400 border-b">
                            <th class="px-6 py-4">Numéro</th>
                            <th class="px-6 py-4">Client</th>
                            <th class="px-6 py-4">Téléphone</th>
                            <th class="px-6 py-4">Adresse</th>
                            <th class="px-6 py-4">Paiement</th>
                            <th class="px-6 py-4">Articles</th>
                            <th class="px-6 py-4 text-right">Total</th>
                            <th class="px-6 py-4">Date</th>
                            <th class="px-6 py-4">Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($commandes as $commande)
                            <tr class="border-b border-gray-100 hover:bg-gray-50 align-top">
                                <td class="px-6 py-4 font-semibold" style="color:#3D2314">{{ $commande->numero }}</td>
                                <td class="px-6 py-4 text-gray-700">{{ $commande->nom_complet }}</td>
                                <td class="px-6 py-4 text-gray-600">{{ $commande->telephone }}</td>
                                <td class="px-6 py-4 text-gray-600 max-w-[180px]">{{ $commande->adresse }}</td>
                                <td class="px-6 py-4 text-gray-600">{{ $commande->paiement }}</td>
                                <td class="px-6 py-4 text-gray-600">
                                    <ul class="space-y-1">
                                        @foreach($commande->produits as $article)
                                            <li class="text-xs">
                                                {{ $article['nom'] ?? '—' }}
                                                <span class="text-gray-400">x{{ $article['qty'] ?? 1 }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td class="px-6 py-4 text-right font-semibold" style="color:#3D2314">
                                    {{ number_format($commande->total, 0, ',', ' ') }} FCFA
                                </td>
                                <td class="px-6 py-4 text-gray-400 text-xs">{{ $commande->created_at->format('d/m/Y à H:i') }}</td>
                                <td class="px-6 py-4">
                                    <form method="POST" action="{{ route('admin.commandes.statut', $commande) }}"
                                          onchange="this.submit()">
                                        @csrf
                                        @method('PATCH')
                                        <select name="statut"
                                                class="text-xs px-2 py-1 rounded-lg border border-gray-300 outline-none"
                                                style="color:#3D2314">
                                            @foreach(['En attente', 'Confirmée', 'Expédiée', 'Livrée', 'Annulée'] as $option)
                                                <option value="{{ $option }}" @selected($commande->statut === $option)>{{ $option }}</option>
                                            @endforeach
                                        </select>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>

    </div>
</section>

</body>
</html>

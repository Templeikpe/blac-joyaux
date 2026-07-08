<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients — Admin Blac Joyaux</title>
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
            <a href="/admin" class="hover:text-orange-700">Commandes</a>
            <a href="/admin/clients" class="font-bold" style="color:#E8820C">Clients</a>
        </nav>
    </div>
</header>

<section class="px-6 py-8">
    <div class="max-w-6xl mx-auto">

        <!-- EN-TÊTE -->
        <div class="flex flex-col md:flex-row justify-between md:items-center gap-4 mb-6">
            <div>
                <h1 class="text-2xl font-bold titre" style="color:#3D2314">Clients inscrits</h1>
                <p class="text-sm text-gray-500">{{ $totalClients }} client(s) au total</p>
            </div>

            <form method="GET" action="{{ route('admin.clients') }}" class="flex gap-2">
                <input type="text" name="recherche" value="{{ $recherche }}" placeholder="Rechercher par nom ou e-mail..."
                       class="px-4 py-2 rounded-lg border border-gray-300 text-sm outline-none focus:border-[#3D2314] w-64">
                <button type="submit" class="text-white text-sm px-4 py-2 rounded-lg" style="background:#3D2314">
                    <i class="fas fa-search"></i>
                </button>
                @if($recherche)
                    <a href="{{ route('admin.clients') }}" class="text-sm px-4 py-2 rounded-lg border border-gray-300" style="color:#3D2314">
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
            @if($clients->isEmpty())
                <div class="p-10 text-center text-gray-400 text-sm">
                    Aucun client trouvé.
                </div>
            @else
                <table class="w-full text-sm">
                    <thead>
                        <tr class="text-left text-xs uppercase tracking-widest text-gray-400 border-b">
                            <th class="px-6 py-4">Nom</th>
                            <th class="px-6 py-4">E-mail</th>
                            <th class="px-6 py-4">Téléphone</th>
                            <th class="px-6 py-4">Inscrit le</th>
                            <th class="px-6 py-4 text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clients as $client)
                            <tr class="border-b border-gray-100 hover:bg-gray-50">
                                <td class="px-6 py-4 font-semibold" style="color:#3D2314">{{ $client->nom }}</td>
                                <td class="px-6 py-4 text-gray-600">{{ $client->email }}</td>
                                <td class="px-6 py-4 text-gray-600">{{ $client->telephone ?? '—' }}</td>
                                <td class="px-6 py-4 text-gray-400 text-xs">{{ $client->created_at->format('d/m/Y à H:i') }}</td>
                                <td class="px-6 py-4 text-right">
                                    <form method="POST" action="{{ route('admin.clients.supprimer', $client) }}"
                                          onsubmit="return confirm('Supprimer ce client ?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700 text-xs">
                                            <i class="fas fa-trash"></i> Supprimer
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>

        <p class="text-xs text-gray-400 mt-4">
            Note : l'historique des commandes de chaque client est stocké dans le navigateur du client (localStorage), pas dans cette base de données. Il n'est donc pas visible ici pour l'instant.
        </p>

    </div>
</section>

</body>
</html>

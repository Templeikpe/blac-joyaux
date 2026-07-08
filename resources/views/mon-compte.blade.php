<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon compte — Blac Joyaux</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family:'Poppins',sans-serif; background:#F5ECD7; }
        .titre { font-family:'Playfair Display',serif; }
    </style>
</head>
<body>

<!-- HEADER -->
<header class="border-b border-gray-400 bg-white">
    <div class="relative flex items-center justify-between h-16 px-7">
        <button id="menuBtn" class="border border-gray-500 w-9 h-9 flex justify-center items-center hover:bg-gray-100 transition">
            <i class="fas fa-bars"></i>
        </button>
        <a href="/" class="absolute left-1/2 -translate-x-1/2 font-bold text-3xl" style="color:#3D2314">Blac Joyaux</a>
        <div class="flex items-center gap-5 text-xl">
            <a href="/panier"><i class="fas fa-shopping-cart cursor-pointer"></i></a>
            <a href="/mon-compte"><i class="fas fa-user cursor-pointer" style="color:#E8820C"></i></a>
        </div>
    </div>
</header>

<!-- MENU LATERAL -->
<aside id="sidebar" class="fixed top-0 left-[-300px] w-72 h-full bg-white shadow-2xl duration-300 z-50">
    <div class="flex justify-between items-center p-5 border-b">
        <h2 class="font-bold text-xl">Menu</h2>
        <button id="closeMenu"><i class="fas fa-times text-xl"></i></button>
    </div>
    <nav class="flex flex-col p-6 gap-6 text-lg">
        <a href="/">Accueil</a>
        <a href="/boutique">Nos Collections</a>
        <a href="/a-propos">À propos</a>
        <a href="/actualites">Actualité</a>
        <a href="/contact">Contact</a>
    </nav>
</aside>
<div id="overlay" class="hidden fixed inset-0 bg-black/50 z-40"></div>

<!-- CONTENU -->
<section class="px-6 py-10">
    <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- COLONNE PROFIL -->
        <div class="md:col-span-1">
            <div class="bg-white rounded-2xl shadow-sm p-6 mb-6">
                <div class="w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold text-white mb-4" style="background:#3D2314">
                    {{ strtoupper(substr($client->nom, 0, 1)) }}
                </div>
                <h1 class="font-bold text-lg titre mb-1" style="color:#3D2314">{{ $client->nom }}</h1>
                <p class="text-xs text-gray-400 mb-4">Membre depuis {{ $client->created_at->translatedFormat('F Y') }}</p>

                <div class="space-y-3 text-sm border-t pt-4">
                    <div class="flex items-center gap-3">
                        <i class="fas fa-envelope text-gray-400 w-4"></i>
                        <span style="color:#3D2314">{{ $client->email }}</span>
                        @if($client->email_verified_at)
                            <i class="fas fa-circle-check text-xs" style="color:#25D366" title="Vérifié"></i>
                        @endif
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-phone text-gray-400 w-4"></i>
                        <span style="color:#3D2314">{{ $client->telephone }}</span>
                        @if($client->telephoneVerifie())
                            <i class="fas fa-circle-check text-xs" style="color:#25D366" title="Vérifié"></i>
                        @endif
                    </div>
                </div>

                <form method="POST" action="{{ route('deconnexion') }}" class="mt-6">
                    @csrf
                    <button type="submit" class="w-full text-sm font-semibold py-3 rounded-xl border-2 hover:bg-gray-50 transition" style="border-color:#3D2314;color:#3D2314">
                        <i class="fas fa-arrow-right-from-bracket"></i> Se déconnecter
                    </button>
                </form>
            </div>
        </div>

        <!-- COLONNE HISTORIQUE DES COMMANDES -->
        <div class="md:col-span-2">
            <h2 class="font-bold text-lg titre mb-6" style="color:#3D2314">Mes commandes</h2>

            @if($client->commandes->isEmpty())
                <div class="bg-white rounded-2xl p-10 text-center shadow-sm">
                    <p class="text-4xl mb-4">📦</p>
                    <p class="text-gray-500 text-sm mb-6">Vous n'avez pas encore passé de commande.</p>
                    <a href="/boutique" class="inline-block text-white text-sm font-semibold px-6 py-3 rounded-xl" style="background:#3D2314">
                        Découvrir la boutique
                    </a>
                </div>
            @else
                <div class="bg-white rounded-2xl shadow-sm overflow-hidden overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="text-left text-xs uppercase tracking-widest text-gray-400 border-b">
                                <th class="px-5 py-4">Numéro</th>
                                <th class="px-5 py-4">Articles</th>
                                <th class="px-5 py-4">Paiement</th>
                                <th class="px-5 py-4 text-right">Total</th>
                                <th class="px-5 py-4">Date</th>
                                <th class="px-5 py-4">Statut</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($client->commandes as $commande)
                                @php
                                    $couleurs = [
                                        'En attente'  => 'bg-yellow-50 text-yellow-700',
                                        'Confirmée'   => 'bg-blue-50 text-blue-700',
                                        'Expédiée'    => 'bg-purple-50 text-purple-700',
                                        'Livrée'      => 'bg-green-50 text-green-700',
                                        'Annulée'     => 'bg-red-50 text-red-700',
                                    ];
                                    $classeCouleur = $couleurs[$commande->statut ?? 'En attente'] ?? 'bg-gray-50 text-gray-600';
                                @endphp
                                <tr class="border-b border-gray-100 hover:bg-gray-50 align-top">
                                    <td class="px-5 py-4 font-semibold whitespace-nowrap" style="color:#3D2314">{{ $commande->numero }}</td>
                                    <td class="px-5 py-4 text-gray-600">
                                        <ul class="space-y-1">
                                            @foreach($commande->produits as $article)
                                                <li class="text-xs whitespace-nowrap">
                                                    {{ $article['nom'] ?? 'Article' }}
                                                    <span class="text-gray-400">x{{ $article['qty'] ?? 1 }}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td class="px-5 py-4 text-gray-600 whitespace-nowrap">{{ $commande->paiement }}</td>
                                    <td class="px-5 py-4 text-right font-semibold whitespace-nowrap" style="color:#3D2314">
                                        {{ number_format($commande->total, 0, ',', ' ') }} FCFA
                                    </td>
                                    <td class="px-5 py-4 text-gray-400 text-xs whitespace-nowrap">{{ $commande->created_at->format('d/m/Y à H:i') }}</td>
                                    <td class="px-5 py-4">
                                        <span class="text-xs font-semibold px-3 py-1 rounded-full whitespace-nowrap {{ $classeCouleur }}">
                                            {{ $commande->statut ?? 'En attente' }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>

    </div>
</section>

<!-- FOOTER -->
<footer class="text-white py-10 px-6" style="background:#3D2314">
    <div class="max-w-6xl mx-auto text-center text-gray-400 text-xs">
        © 2026 Blac Joyaux. Tout droit réservé.
    </div>
</footer>

<script>
const menuBtn = document.getElementById('menuBtn');
const closeMenu = document.getElementById('closeMenu');
const sidebar = document.getElementById('sidebar');
const overlay = document.getElementById('overlay');
menuBtn.onclick = () => { sidebar.style.left = "0"; overlay.classList.remove("hidden"); }
closeMenu.onclick = closeSidebar;
overlay.onclick = closeSidebar;
function closeSidebar(){ sidebar.style.left="-300px"; overlay.classList.add("hidden"); }
</script>

</body>
</html>

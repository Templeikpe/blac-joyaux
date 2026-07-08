<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche — Blac Joyaux</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Montserrat', sans-serif; background:#F5ECD7; }
        .titre { font-family: 'Montserrat', sans-serif; }
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

<!-- GROSSE BARRE DE RECHERCHE -->
<section class="px-6 pt-14 pb-8 text-center">
    <h1 class="text-3xl font-bold titre mb-6" style="color:#3D2314">Que cherches-tu ?</h1>

    <form method="GET" action="{{ route('recherche') }}" class="max-w-2xl mx-auto">
        <div class="relative">
            <i class="fas fa-search absolute left-6 top-1/2 -translate-y-1/2 text-gray-400 text-xl"></i>
            <input type="text" name="q" value="{{ $q }}" autofocus
                   placeholder="Rechercher un sac, une collection, une page..."
                   class="w-full pl-14 pr-6 py-5 rounded-2xl border-2 border-gray-300 text-lg outline-none focus:border-[#3D2314] bg-white shadow-sm">
        </div>
        <button type="submit"
                class="mt-4 text-white font-semibold px-10 py-3 rounded-xl text-sm hover:opacity-90 transition"
                style="background:#3D2314">
            Rechercher
        </button>
    </form>
</section>

<!-- RESULTATS -->
<section class="px-6 pb-16">
    <div class="max-w-5xl mx-auto">

        @if($q === '')
            <p class="text-center text-gray-400 text-sm">Commence à taper pour explorer tout le site Blac Joyaux : produits, collections et pages.</p>
        @elseif(count($resultats) === 0)
            <div class="text-center py-14">
                <p class="text-4xl mb-4">🔍</p>
                <p class="text-gray-500 text-sm">Aucun résultat pour « {{ $q }} ».</p>
                <a href="/boutique" class="inline-block mt-6 text-white text-sm font-semibold px-6 py-3 rounded-xl" style="background:#3D2314">
                    Voir la boutique
                </a>
            </div>
        @else
            <p class="text-sm text-gray-500 mb-6">{{ count($resultats) }} résultat(s) pour « {{ $q }} »</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                @foreach($resultats as $item)
                    <a href="{{ $item['url'] }}" class="block bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition group">
                        @if($item['type'] === 'produit')
                            <div class="overflow-hidden">
                                <img src="{{ $item['img'] }}" alt="{{ $item['titre'] }}" class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                            </div>
                            <div class="p-4">
                                <p class="text-xs text-gray-400 mb-1">{{ $item['collection'] }}</p>
                                <p class="font-semibold text-sm mb-1" style="color:#3D2314">{{ $item['titre'] }}</p>
                                <p class="font-bold text-sm" style="color:#E8820C">{{ number_format($item['prix'], 0, ',', '.') }} CFA</p>
                            </div>
                        @else
                            <div class="p-6 flex items-start gap-4">
                                <div class="w-11 h-11 rounded-xl flex items-center justify-center text-lg shrink-0" style="background:#F5ECD7; color:#3D2314">
                                    <i class="fas fa-file-lines"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-400 mb-1">Page du site</p>
                                    <p class="font-semibold text-sm mb-1" style="color:#3D2314">{{ $item['titre'] }}</p>
                                    <p class="text-xs text-gray-500">{{ $item['description'] }}</p>
                                </div>
                            </div>
                        @endif
                    </a>
                @endforeach
            </div>
        @endif

    </div>
</section>

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

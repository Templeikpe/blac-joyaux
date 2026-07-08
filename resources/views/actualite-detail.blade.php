<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $titre }} — Blac Joyaux</title>
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
            <a href="/recherche"><i class="fas fa-search cursor-pointer"></i></a>
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

<!-- HERO -->
<section class="relative py-20 px-6 text-white text-center"
         style="background-image:linear-gradient(rgba(61,35,20,0.6),rgba(61,35,20,0.6)),url('{{ $produits[0]['img'] }}');background-size:cover;background-position:center;min-height:240px">
    <p class="text-xs uppercase tracking-widest text-gray-200 mb-2">Actualité Blac Joyaux</p>
    <h1 class="text-3xl font-bold mb-3 uppercase titre">{{ $titre }}</h1>
    @if(isset($sousTitre))
        <p class="text-sm italic text-gray-100 max-w-lg mx-auto">{{ $sousTitre }}</p>
    @endif
</section>

<!-- CONTENU -->
<section class="py-14 px-6">
    <div class="max-w-4xl mx-auto">

        <p class="text-sm text-gray-600 leading-relaxed mb-10 text-center max-w-2xl mx-auto">
            {{ $description }}
        </p>

        <!-- GALERIE 3 IMAGES — cliquables, mènent à la fiche produit -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-10">
            @foreach($produits as $p)
                <a href="/fiche-produit?nom={{ urlencode($p['nom']) }}&prix={{ $p['prix'] }}&img={{ urlencode($p['img']) }}&collection={{ urlencode($p['collection']) }}&description={{ urlencode($p['description']) }}"
                   class="block rounded-2xl overflow-hidden shadow-sm bg-white hover:shadow-md transition group">
                    <div class="overflow-hidden">
                        <img src="{{ $p['img'] }}" alt="{{ $p['nom'] }}" class="w-full h-64 object-cover group-hover:scale-105 transition duration-300">
                    </div>
                    <div class="p-4">
                        <p class="font-semibold text-sm mb-1" style="color:#3D2314">{{ $p['nom'] }}</p>
                        <p class="font-bold text-sm mb-3" style="color:#E8820C">{{ number_format($p['prix'], 0, ',', '.') }} CFA</p>
                        <span class="w-full block text-center text-white text-xs py-2 rounded font-medium" style="background:#3D2314">
                            Voir & commander
                        </span>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="text-center">
            <a href="/boutique" class="inline-block text-white text-sm px-8 py-3 rounded-xl font-semibold" style="background:#3D2314">
                Découvrir nos collections
            </a>
        </div>

    </div>
</section>

<!-- FOOTER -->
<footer class="text-white py-12 px-6" style="background:#3D2314">
    <div class="max-w-6xl mx-auto text-center text-xs text-gray-400">
        © 2026 Blac Joyaux. Tout droit réservé. &nbsp;|&nbsp;
        <a href="/legal" class="hover:text-orange-400">Confidentialité</a> &nbsp;|&nbsp;
        <a href="/legal" class="hover:text-orange-400">Conditions générales</a>
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

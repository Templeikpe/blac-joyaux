<?php
// ============================================================
// FICHE PRODUIT — Générique (pilotée par l'URL)
// Utilisation : /fiche-produit?nom=...&prix=...&img=...&collection=...&description=...
// ============================================================
$nom         = request()->query('nom', 'Sac à main');
$prix        = (int) request()->query('prix', 50000);
$img         = request()->query('img', asset('img/Sac-noir.jpg'));
$collection  = request()->query('collection', 'Joyau de Bla');
$description = request()->query('description', "Découvrez le sac Blac Joyaux, un modèle au design tropical qui allie élégance, praticité et savoir-faire ivoirien dans une pièce unique.");
$prixFormate = number_format($prix, 0, ',', '.');

$pointsForts = [
    'Design moderne : silhouette tropicale élégante et finitions soignées',
    'Format pratique : 27 × 16 × 11 cm, parfait pour l\'essentiel du quotidien',
    'Rangement optimisé : grand compartiment principal et poches intérieures',
    'Confort d\'utilisation : poignées renforcées et bandoulière amovible pour le porter à la main ou à l\'épaule',
    'Plusieurs coloris disponibles dans des teintes classiques et tendance',
];

$matiereFabrication = [
    'Similicuir sélectionné pour sa qualité supérieure et son aspect authentique',
    'La finition avec une bouche en métal chromé ajoute une touche de raffinement',
    'Les coutures originales par les meilleurs artisans de Côte d\'Ivoire',
    'La doublure intérieure en gabardine 100% coton',
];

$avis = [
    ['note' => 5, 'texte' => "J'ai acheté ce sac chez Blac Joyaux pour mon anniversaire, et vraiment ce n'est pas exagéré de dire que c'est incroyable qu'il aille aussi bien avec toutes mes tenues.", 'auteur' => 'Fatoumata K.'],
    ['note' => 5, 'texte' => "Élégant, pratique et de belle qualité, vraiment rien à redire. J'accompagne à chaque fois.", 'auteur' => 'Mariam O.'],
    ['note' => 5, 'texte' => "Un vrai coup de cœur, sac au toucher doux et très bien fini. Je recommande fortement Blac Joyaux !", 'auteur' => 'Adjoua N.'],
];

$similaires = [
    ['nom' => 'Rose avec bijoux doré', 'prix' => 50000, 'img' => asset('img/Sac-violet.jpg'), 'collection' => 'Joyau de Bla'],
    ['nom' => 'Noir avec bijoux doré', 'prix' => 50000, 'img' => asset('img/Sac-noir.jpg'), 'collection' => 'Joyau de Bla'],
    ['nom' => 'Croco Lézard', 'prix' => 70000, 'img' => asset('img/Sac-blac-joyaux-DO-croco-lezard-416x416.jpg'), 'collection' => 'Collection DO'],
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $nom }} — Blac Joyaux</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family:'Poppins',sans-serif; background:#F5ECD7; }
        .titre { font-family:'Playfair Display',serif; }
        .miniature.active { border-color:#3D2314 !important; }
        .produit-card { transition: all .3s ease; }
        .produit-card:hover { transform: translateY(-4px); }
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

<!-- FIL D'ARIANE -->
<div class="max-w-6xl mx-auto px-6 pt-6 text-xs text-gray-500">
    <a href="/" class="hover:text-orange-700">Accueil</a> /
    <a href="/boutique" class="hover:text-orange-700">Boutique</a> /
    <span style="color:#3D2314">{{ $nom }}</span>
</div>

<!-- FICHE PRODUIT -->
<section class="px-6 py-8">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10">

        <!-- GALERIE -->
        <div>
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm mb-3">
                <img id="imagePrincipale" src="{{ $img }}" alt="{{ $nom }}" class="w-full h-96 object-cover">
            </div>
            <div class="flex gap-3">
                <button class="miniature active w-20 h-20 rounded-lg overflow-hidden border-2" style="border-color:#3D2314">
                    <img src="{{ $img }}" class="w-full h-full object-cover">
                </button>
            </div>
        </div>

        <!-- INFOS -->
        <div>
            <p class="text-xs font-medium tracking-widest uppercase mb-2" style="color:#E8820C">Sac à main - Nouvelle version</p>
            <h1 class="text-2xl font-bold titre mb-2" style="color:#3D2314">{{ $nom }}</h1>
            <p class="text-sm text-gray-500 mb-4">{{ $collection }}</p>
            <p class="text-2xl font-bold mb-6" style="color:#E8820C" id="prixAffiche">{{ $prixFormate }} CFA</p>

            <!-- QUANTITÉ -->
            <div class="mb-6">
                <p class="text-sm font-semibold mb-3" style="color:#3D2314">Quantité</p>
                <div class="flex items-center gap-4 w-fit border rounded-full px-2 py-1" style="border-color:#3D2314">
                    <button onclick="changerQuantite(-1)" class="w-8 h-8 flex items-center justify-center text-lg" style="color:#3D2314">−</button>
                    <span id="quantite" class="font-semibold w-6 text-center">1</span>
                    <button onclick="changerQuantite(1)" class="w-8 h-8 flex items-center justify-center text-lg" style="color:#3D2314">+</button>
                </div>
            </div>

            <!-- ACTIONS -->
            <div class="flex flex-col gap-3 mb-8">
                <button onclick="ajouterAuPanier()"
                        class="w-full text-center text-white font-semibold py-3 rounded-xl text-sm" style="background:#3D2314">
                    Ajouter au panier
                </button>
                <div class="flex gap-3">
                    <a id="lienMessenger" href="#" target="_blank"
                       class="flex-1 flex items-center justify-center gap-2 text-white font-semibold py-3 rounded-xl text-sm" style="background:#1877F2">
                        <i class="fab fa-facebook-messenger"></i> Commander sur messenger
                    </a>
                    <a id="lienWhatsapp" href="#" target="_blank"
                       class="flex-1 flex items-center justify-center gap-2 text-white font-semibold py-3 rounded-xl text-sm" style="background:#25D366">
                        <i class="fab fa-whatsapp"></i> Commander sur Whatsapp
                    </a>
                </div>
            </div>

            <!-- DESCRIPTION -->
            <div class="mb-6 pb-6 border-b border-gray-200">
                <h3 class="font-bold text-sm mb-2" style="color:#3D2314">Description</h3>
                <p class="text-sm text-gray-600 leading-relaxed">{{ $description }}</p>
            </div>

            <!-- POINTS FORTS -->
            <div class="mb-6 pb-6 border-b border-gray-200">
                <h3 class="font-bold text-sm mb-2" style="color:#3D2314">Points forts</h3>
                <ul class="text-sm text-gray-600 space-y-1">
                    @foreach($pointsForts as $point)
                        <li class="flex items-start gap-2">
                            <span style="color:#E8820C">•</span> {{ $point }}
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- MATIÈRE & FABRICATION -->
            <div>
                <h3 class="font-bold text-sm mb-2" style="color:#3D2314">Matière & Fabrication</h3>
                <ul class="text-sm text-gray-600 space-y-1">
                    @foreach($matiereFabrication as $ligne)
                        <li class="flex items-start gap-2">
                            <span style="color:#E8820C">•</span> {{ $ligne }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- AVIS CLIENTS -->
<section class="px-6 py-10 bg-white">
    <div class="max-w-5xl mx-auto text-center">
        <button class="text-white font-semibold px-8 py-3 rounded-full text-sm mb-10" style="background:#3D2314">
            Quelques avis clients
        </button>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($avis as $a)
                <div class="text-left">
                    <p class="text-yellow-500 text-sm mb-2">{{ str_repeat('★', $a['note']) }}</p>
                    <p class="text-xs text-gray-600 italic leading-relaxed mb-2">"{{ $a['texte'] }}"</p>
                    <p class="text-xs font-semibold" style="color:#3D2314">{{ $a['auteur'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- VOUS POURRIEZ AIMER AUSSI -->
<section class="px-6 py-10" style="background:#F5ECD7">
    <div class="max-w-6xl mx-auto">
        <h3 class="font-bold text-lg mb-6 titre" style="color:#3D2314">Vous pourriez aimer aussi...</h3>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-5">
            @foreach($similaires as $p)
                <a href="/fiche-produit?nom={{ urlencode($p['nom']) }}&prix={{ $p['prix'] }}&img={{ urlencode($p['img']) }}&collection={{ urlencode($p['collection']) }}"
                   class="produit-card bg-white rounded-xl overflow-hidden shadow-sm block">
                    <img src="{{ $p['img'] }}" alt="{{ $p['nom'] }}" class="w-full h-44 object-cover">
                    <div class="p-3">
                        <p class="text-xs text-gray-400 mb-1">Sac à main - Nouvelle version</p>
                        <p class="font-bold text-sm mb-1" style="color:#3D2314">{{ $p['nom'] }}</p>
                        <p class="font-bold text-sm mb-3" style="color:#3D2314">{{ number_format($p['prix'], 0, ',', '.') }} CFA</p>
                        <span class="block text-center text-white text-xs py-2 rounded" style="background:#3D2314">Voir plus</span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="text-white py-12 px-6" style="background:#3D2314">

    <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 text-sm mb-8">

        <!-- Présentation -->
        <div>
            <h3 class="font-bold text-lg mb-4"
                style="font-family:'Playfair Display',serif">
                Blac Joyaux
            </h3>

            <p class="text-gray-300 text-xs leading-relaxed mb-4">
                Nous sommes une marque ivoirienne de maroquinerie qui raconte
                une histoire, celle de la Côte d'Ivoire, de sa résilience,
                de ses traditions africaines.
            </p>

            <p class="text-xs text-gray-400">
                Inscrivez-vous à la newsletter
            </p>

            <div class="flex mt-2">
                <input
                    type="email"
                    placeholder="Saisissez votre e-mail..."
                    class="text-xs px-3 py-2 rounded-l text-gray-800 w-full outline-none">

                <button
                    class="px-3 py-2 rounded-r text-white text-xs"
                    style="background:#E8820C">
                    ›
                </button>
            </div>
        </div>

        <!-- Collections -->
        <div>
            <h4 class="font-semibold mb-4 uppercase text-xs tracking-widest"
                style="color:#E8820C">
                Collections
            </h4>

            <ul class="text-gray-300 space-y-2 text-xs">
                <li>
                    <a href="/collection/do"
                       class="hover:text-orange-400">
                        Dominique
                    </a>
                </li>

                <li>
                    <a href="/collection/do"
                       class="hover:text-orange-400">
                        Ouattara
                    </a>
                </li>

                <li>
                    <a href="/collection/joyau-de-bla"
                       class="hover:text-orange-400">
                        Joyaux de Bla
                    </a>
                </li>
            </ul>
        </div>

        <!-- Support -->
        <div>
            <h4 class="font-semibold mb-4 uppercase text-xs tracking-widest"
                style="color:#E8820C">
                Support
            </h4>

            <ul class="text-gray-300 space-y-2 text-xs">
                <li>
                    <a href="/contact"
                       class="hover:text-orange-400">
                        Contacts
                    </a>
                </li>

                <li>
                    <a href="/actualites"
                       class="hover:text-orange-400">
                        Actualités
                    </a>
                </li>
            </ul>
        </div>

        <!-- Réseaux -->
        <div>
            <h4 class="font-semibold mb-4 uppercase text-xs tracking-widest"
                style="color:#E8820C">
                Réseaux sociaux
            </h4>

            <ul class="text-gray-300 space-y-2 text-xs">

                <li>
                    <a href="https://www.instagram.com/blacjoyaux"
                       class="hover:text-orange-400">
                        📸 Instagram
                    </a>
                </li>

                <li>
                    <a href="https://www.tiktok.com/@blac.joyaux"
                       class="hover:text-orange-400">
                        🎵 TikTok
                    </a>
                </li>

                <li>
                    <a href="https://www.facebook.com/"
                       class="hover:text-orange-400">
                        📘 Facebook
                    </a>
                </li>

                <li>
                    <a href="https://wa.me/2250708771557"
                       class="hover:text-orange-400">
                        💬 WhatsApp
                    </a>
                </li>

            </ul>

            <div class="mt-4">

                <p class="text-xs text-gray-400 mb-1">
                    Showroom Blac Joyaux
                </p>

                <p class="text-xs text-gray-300">
                    Côte d'Ivoire · Commune de Cocody<br>
                    Rond-point de la Riviera Palmeraie
                </p>

                <p class="text-xs text-gray-300 mt-2">
                    Horaire d'ouverture<br>
                    Lundi au samedi, de 09h00 à 18h00
                </p>

                <p class="text-xs mt-2"
                   style="color:#E8820C">
                    Contact / SAV<br>
                    +225 0708771557 · +225 0564542215
                </p>

            </div>
        </div>

    </div>

    <!-- Bas du footer -->
    <div class="border-t border-white/10 pt-6 text-center text-gray-400 text-xs">

        © 2026 Blac Joyaux. Tout droit réservé.

        &nbsp;|&nbsp;

        <a href="/legal"
           class="hover:text-orange-400">
            Confidentialité
        </a>

        &nbsp;|&nbsp;

        <a href="/legal"
           class="hover:text-orange-400">
            Conditions générales
        </a>

    </div>

</footer>
<!-- WHATSAPP FLOTTANT -->
<a href="https://wa.me/2250708771557" target="_blank"
   class="fixed bottom-6 right-6 bg-green-500 text-white rounded-full w-14 h-14 flex items-center justify-center text-2xl shadow-xl hover:bg-green-600 transition-all z-50">
    💬
</a>

<script>
const produitActuel = {
    nom: @json($nom),
    prix: {{ $prix }},
    img: @json($img),
    collection: @json($collection),
    description: @json($description)
};
let quantite = 1;

const menuBtn = document.getElementById('menuBtn');
const closeMenu = document.getElementById('closeMenu');
const sidebar = document.getElementById('sidebar');
const overlay = document.getElementById('overlay');
menuBtn.onclick = () => { sidebar.style.left = "0"; overlay.classList.remove("hidden"); }
closeMenu.onclick = closeSidebar;
overlay.onclick = closeSidebar;
function closeSidebar(){ sidebar.style.left="-300px"; overlay.classList.add("hidden"); }

function changerQuantite(delta) {
    quantite = Math.max(1, quantite + delta);
    document.getElementById('quantite').textContent = quantite;
    const total = produitActuel.prix * quantite;
    document.getElementById('prixAffiche').textContent = total.toLocaleString('fr-FR') + ' CFA';
    majLiens();
}

function ajouterAuPanier() {
    let panier = JSON.parse(localStorage.getItem('panier') || '[]');
    const index = panier.findIndex(p => p.nom === produitActuel.nom);
    if (index !== -1) {
        panier[index].qty += quantite;
    } else {
        panier.push({
            nom: produitActuel.nom,
            prix: produitActuel.prix,
            img: produitActuel.img,
            collection: produitActuel.collection,
            description: produitActuel.description,
            qty: quantite
        });
    }
    localStorage.setItem('panier', JSON.stringify(panier));
    alert('✅ ' + produitActuel.nom + ' ajouté au panier !');
    window.location.href = '/panier';
}

function majLiens() {
    const total = (produitActuel.prix * quantite).toLocaleString('fr-FR');
    const msg = `Bonjour, je veux commander le sac ${produitActuel.nom} à ${total} CFA`;
    document.getElementById('lienWhatsapp').href = 'https://wa.me/2250708771557?text=' + encodeURIComponent(msg);
    document.getElementById('lienMessenger').href = 'https://m.me/blacjoyaux?text=' + encodeURIComponent(msg);
}
majLiens();
</script>

</body>
</html>

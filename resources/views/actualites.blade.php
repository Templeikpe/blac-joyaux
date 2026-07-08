<?php
// ============================================================
// DONNÉES ACTUALITÉS
// Pour ajouter une actu, ajoute une entrée dans ce tableau.
// ============================================================
$actualites = [
    [
        'titre' => 'Moayé',
        'image' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=600&q=80',
        'description' => "Le Moayé incarne l'alliance entre l'élégance professionnelle et l'héritage ivoirien. Un compagnon du quotidien qui allie discrétion, raffinement et authenticité.",
        'lien' => '/actualites/moaye',
        'images' => [
            asset('img/sac-noir.jpg'),
            asset('img/sac-dore.jpg'),
            asset('img/sac-marron.jpg'),
        ],
    ],
    [
        'titre' => 'Kiolêh',
        'image' => 'https://images.unsplash.com/photo-1590874103328-eac38a683ce7?w=600&q=80',
        'description' => "Kiolêh naît dans un esprit de flamme : un symbole chaleureux du Sud de la Côte d'Ivoire, célébrant l'expression d'une identité authentique.",
        'sousTitre' => "« Kiolêh par Blac Joyaux : Mother famous, affirme telle sagesse. »",
        'lien' => '/actualites/kioleh',
        'images' => [
            asset('img/sac-jaune.jpg'),
            asset('img/sac-rouge.png'),
            asset('img/Sac-Blac-Joyaux-Vert-2-416x416.jpg'),
        ],
    ],
    [
        'titre' => 'Sika',
        'image' => 'https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?w=600&q=80',
        'description' => "Le Sika incarne l'essence et l'élégance du cuivre, une pièce qui allie hommage artisanal et style intemporel.",
        'sousTitre' => "« Sika : l'Or véritable, notre héritage. »",
        'lien' => '/actualites/sika',
        'images' => [
            asset('img/Sac-Blac-Joyaux-Dore-1-416x416.jpg'),
            asset('img/Sac-Blac-Joyaux-Dore-2-768x768.jpg'),
            asset('img/Sac-Blac-Joyaux-Dore-3.jpg'),
        ],
    ],
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualités — Blac Joyaux</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family:'Poppins',sans-serif; background:#F5ECD7; }
        .titre { font-family:'Playfair Display',serif; }
        .actu-card { transition: all .3s ease; }
        .actu-card:hover { transform: translateY(-3px); }
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

<!-- HERO ACTUALITES -->
<section class="relative py-24 px-6 text-white text-center"
         style="background-image:linear-gradient(rgba(61,35,20,0.6),rgba(61,35,20,0.6)),url('{{ asset('img/actualites-hero.jpg') }}');background-size:cover;background-position:center;min-height:280px">
    <h1 class="text-3xl font-bold mb-4 uppercase tracking-widest titre">Actualités</h1>
    <p class="text-sm text-gray-100 max-w-md mx-auto leading-relaxed">
        Restez informer de toutes les nouvelles actualités concernant votre maroquinerie préférée
    </p>
</section>

<!-- LISTE ACTUALITES -->
<section class="py-14 px-6" style="background:#F5ECD7">
    <div class="max-w-4xl mx-auto space-y-10">

        @foreach($actualites as $i => $actu)
            <div class="actu-card flex flex-col md:flex-row {{ $i % 2 === 1 ? 'md:flex-row-reverse' : '' }} items-center gap-6 bg-white rounded-2xl overflow-hidden shadow-sm p-6">

                <!-- IMAGE -->
                <div class="w-full md:w-2/5">
                    <img src="{{ $actu['image'] }}" alt="{{ $actu['titre'] }}" class="w-full h-56 object-cover rounded-xl">
                </div>

                <!-- CONTENU -->
                <div class="w-full md:w-3/5 text-center md:text-left">
                    <h2 class="text-xl font-bold mb-3 titre" style="color:#3D2314">{{ $actu['titre'] }}</h2>
                    <p class="text-sm text-gray-600 leading-relaxed mb-4">{{ $actu['description'] }}</p>
                    @if(isset($actu['sousTitre']))
                        <p class="text-xs italic text-gray-500 mb-4">{{ $actu['sousTitre'] }}</p>
                    @endif

                    <div class="flex flex-col md:flex-row items-center md:justify-between gap-3">
                        <p class="text-xs text-gray-500 leading-relaxed">
                            Cliquez ici pour avoir plus d'information sur ce sac
                        </p>
                        <a href="{{ $actu['lien'] }}"
                           class="inline-block text-white text-xs px-6 py-2 rounded whitespace-nowrap" style="background:#3D2314">
                            En savoir plus
                        </a>
                    </div>
                </div>
            </div>
        @endforeach

        <!-- INFO DU JOUR -->
        <div class="rounded-2xl text-center p-8" style="background:#EADFC7">
            <h3 class="font-bold text-sm uppercase tracking-widest mb-3" style="color:#3D2314">Info du jour</h3>
            <p class="text-sm text-gray-600 leading-relaxed max-w-lg mx-auto">
                Chers clients le nouveau site internet de Blac Joyaux, maroquinerie 100% ivoirienne, vient d'être mis en ligne.
            </p>
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

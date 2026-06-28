<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualités — Blac Joyaux</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background:#F5ECD7; }
        .article-card { transition: all 0.3s ease; }
        .article-card:hover { transform: translateY(-4px); box-shadow: 0 12px 30px rgba(61,35,20,0.15); }
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
            <i class="fas fa-search cursor-pointer"></i>
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
<section class="py-12 px-6 text-center" style="background:#3D2314">
    <p class="text-sm font-medium tracking-widest uppercase mb-2" style="color:#E8820C">Blog & News</p>
    <h1 class="text-3xl font-bold text-white">Actualités</h1>
    <p class="text-gray-300 mt-3 text-sm">Suivez les dernières nouvelles de Blac Joyaux</p>
</section>

<!-- ARTICLES -->
<section class="py-12 px-6" style="background:#F5ECD7">
    <div class="max-w-5xl mx-auto">

        <!-- Article 1 — À la une -->
        <div class="article-card bg-white rounded-2xl overflow-hidden shadow-sm mb-8">
            <div class="md:flex">
                <div class="md:w-1/2">
                    <img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=600&q=80"
                         alt="Ouverture Showroom" class="w-full h-64 object-cover">
                </div>
                <div class="md:w-1/2 p-6 flex flex-col justify-center">
                    <span class="text-xs font-medium px-3 py-1 rounded-full mb-3 inline-block w-fit" style="background:#E8820C;color:#fff">À la une</span>
                    <h2 class="text-xl font-bold mb-3" style="color:#3D2314">Ouverture du Showroom Blac Joyaux à Cocody Palmeraie</h2>
                    <p class="text-xs text-gray-500 leading-relaxed mb-4">
                        Blac Joyaux ouvre officiellement son premier showroom à Cocody Palmeraie, Abidjan. Un espace élégant dédié à la maroquinerie ivoirienne premium où vous pouvez découvrir toutes nos collections.
                    </p>
                    <div class="flex items-center justify-between">
                        <p class="text-xs text-gray-400">15 Janvier 2025</p>
                        <a href="#" class="text-xs font-semibold hover:underline" style="color:#E8820C">Lire la suite →</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Grille articles -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Article 2 -->
            <div class="article-card bg-white rounded-2xl overflow-hidden shadow-sm">
                <img src="https://images.unsplash.com/photo-1590874103328-eac38a683ce7?w=400&q=80"
                     alt="Collection DO" class="w-full h-44 object-cover">
                <div class="p-4">
                    <span class="text-xs font-medium px-2 py-1 rounded-full mb-2 inline-block" style="background:#F5ECD7;color:#3D2314">Collection</span>
                    <h3 class="font-bold text-sm mb-2" style="color:#3D2314">Lancement de la Collection DO — Dominique</h3>
                    <p class="text-xs text-gray-500 leading-relaxed mb-3">
                        Découvrez notre nouvelle collection DO, inspirée de l'élégance de la femme ivoirienne moderne.
                    </p>
                    <div class="flex items-center justify-between">
                        <p class="text-xs text-gray-400">03 Mars 2025</p>
                        <a href="#" class="text-xs font-semibold" style="color:#E8820C">Lire →</a>
                    </div>
                </div>
            </div>

            <!-- Article 3 -->
            <div class="article-card bg-white rounded-2xl overflow-hidden shadow-sm">
                <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=400&q=80"
                     alt="Artisanat" class="w-full h-44 object-cover">
                <div class="p-4">
                    <span class="text-xs font-medium px-2 py-1 rounded-full mb-2 inline-block" style="background:#F5ECD7;color:#3D2314">Artisanat</span>
                    <h3 class="font-bold text-sm mb-2" style="color:#3D2314">Le savoir-faire artisanal ivoirien à l'honneur</h3>
                    <p class="text-xs text-gray-500 leading-relaxed mb-3">
                        Rencontre avec nos artisans d'Adjamé qui fabriquent chaque sac Blac Joyaux à la main.
                    </p>
                    <div class="flex items-center justify-between">
                        <p class="text-xs text-gray-400">20 Avril 2025</p>
                        <a href="#" class="text-xs font-semibold" style="color:#E8820C">Lire →</a>
                    </div>
                </div>
            </div>

            <!-- Article 4 -->
            <div class="article-card bg-white rounded-2xl overflow-hidden shadow-sm">
                <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?w=400&q=80"
                     alt="Capsule" class="w-full h-44 object-cover">
                <div class="p-4">
                    <span class="text-xs font-medium px-2 py-1 rounded-full mb-2 inline-block" style="background:#F5ECD7;color:#3D2314">Capsule</span>
                    <h3 class="font-bold text-sm mb-2" style="color:#3D2314">Collection Capsule 2026 — Le sac de bureau arrive !</h3>
                    <p class="text-xs text-gray-500 leading-relaxed mb-3">
                        Blac Joyaux lance sa première collection capsule avec un focus sur le sac de bureau premium.
                    </p>
                    <div class="flex items-center justify-between">
                        <p class="text-xs text-gray-400">10 Juin 2026</p>
                        <a href="#" class="text-xs font-semibold" style="color:#E8820C">Lire →</a>
                    </div>
                </div>
            </div>

            <!-- Article 5 -->
            <div class="article-card bg-white rounded-2xl overflow-hidden shadow-sm">
                <img src="https://images.unsplash.com/photo-1575032617751-6ddec2089882?w=400&q=80"
                     alt="Cadeau" class="w-full h-44 object-cover">
                <div class="p-4">
                    <span class="text-xs font-medium px-2 py-1 rounded-full mb-2 inline-block" style="background:#F5ECD7;color:#3D2314">Lifestyle</span>
                    <h3 class="font-bold text-sm mb-2" style="color:#3D2314">Blac Joyaux, le cadeau idéal pour la femme cadre</h3>
                    <p class="text-xs text-gray-500 leading-relaxed mb-3">
                        Découvrez pourquoi nos clientes choisissent Blac Joyaux pour offrir à leurs proches.
                    </p>
                    <div class="flex items-center justify-between">
                        <p class="text-xs text-gray-400">05 Mai 2026</p>
                        <a href="#" class="text-xs font-semibold" style="color:#E8820C">Lire →</a>
                    </div>
                </div>
            </div>

            <!-- Article 6 -->
            <div class="article-card bg-white rounded-2xl overflow-hidden shadow-sm">
                <img src="https://images.unsplash.com/photo-1591561954557-26941169b49e?w=400&q=80"
                     alt="Mode CI" class="w-full h-44 object-cover">
                <div class="p-4">
                    <span class="text-xs font-medium px-2 py-1 rounded-full mb-2 inline-block" style="background:#F5ECD7;color:#3D2314">Mode</span>
                    <h3 class="font-bold text-sm mb-2" style="color:#3D2314">Made in CI : la mode ivoirienne s'impose sur la scène africaine</h3>
                    <p class="text-xs text-gray-500 leading-relaxed mb-3">
                        Blac Joyaux fait partie des marques ivoiriennes qui valorisent l'artisanat local.
                    </p>
                    <div class="flex items-center justify-between">
                        <p class="text-xs text-gray-400">18 Juin 2026</p>
                        <a href="#" class="text-xs font-semibold" style="color:#E8820C">Lire →</a>
                    </div>
                </div>
            </div>

            <!-- Article 7 -->
            <div class="article-card bg-white rounded-2xl overflow-hidden shadow-sm">
                <img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=400&q=80"
                     alt="Joyaux de Bla" class="w-full h-44 object-cover">
                <div class="p-4">
                    <span class="text-xs font-medium px-2 py-1 rounded-full mb-2 inline-block" style="background:#F5ECD7;color:#3D2314">Culture</span>
                    <h3 class="font-bold text-sm mb-2" style="color:#3D2314">La poupée Joyaux de Bla : symbole de notre identité</h3>
                    <p class="text-xs text-gray-500 leading-relaxed mb-3">
                        L'histoire de la poupée ashanti qui inspire chaque création Blac Joyaux.
                    </p>
                    <div class="flex items-center justify-between">
                        <p class="text-xs text-gray-400">25 Juin 2026</p>
                        <a href="#" class="text-xs font-semibold" style="color:#E8820C">Lire →</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="text-white py-10 px-6" style="background:#3D2314">
    <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 text-sm mb-8">
        <div>
            <h3 class="font-bold text-lg mb-4">Blac Joyaux</h3>
            <p class="text-gray-300 text-xs leading-relaxed mb-4">Maroquinerie premium ivoirienne.</p>
            <p class="text-xs text-gray-400 mb-2">Inscrivez-vous à la newsletter</p>
            <div class="flex">
                <input type="email" placeholder="Saisissez votre e-mail..." class="text-xs px-3 py-2 rounded-l text-gray-800 w-full outline-none">
                <button class="px-3 py-2 rounded-r text-white text-xs" style="background:#E8820C">›</button>
            </div>
        </div>
        <div>
            <h4 class="font-semibold mb-4 uppercase text-xs tracking-widest" style="color:#E8820C">Collections</h4>
            <ul class="text-gray-300 space-y-2 text-xs">
                <li><a href="/collection/do" class="hover:text-orange-400">Dominique</a></li>
                <li><a href="/collection/do" class="hover:text-orange-400">Ouattara</a></li>
                <li><a href="/collection/joyau-de-bla" class="hover:text-orange-400">Joyaux de Bla</a></li>
            </ul>
        </div>
        <div>
            <h4 class="font-semibold mb-4 uppercase text-xs tracking-widest" style="color:#E8820C">Support</h4>
            <ul class="text-gray-300 space-y-2 text-xs">
                <li><a href="/contact" class="hover:text-orange-400">Contacts</a></li>
                <li><a href="/actualites" class="hover:text-orange-400">Actualités</a></li>
            </ul>
        </div>
        <div>
            <h4 class="font-semibold mb-4 uppercase text-xs tracking-widest" style="color:#E8820C">Réseaux sociaux</h4>
            <div class="flex gap-3 mb-3 text-lg">
                <a href="#" class="hover:text-orange-400">📸</a>
                <a href="#" class="hover:text-orange-400">🎵</a>
                <a href="#" class="hover:text-orange-400">📘</a>
                <a href="#" class="hover:text-orange-400">💬</a>
            </div>
            <p class="text-xs text-gray-300">
                <span style="color:#E8820C">Showroom Blac Joyaux</span><br>
                Côte d'Ivoire – Commune de Cocody<br>
                Rond-point de la Riviera Palmeraie<br><br>
                Lundi au samedi, de 09h00 à 18h00<br><br>
                <span style="color:#E8820C">Contact / SAV</span><br>
                +225 0700775537 | +225 0564542215
            </p>
        </div>
    </div>
    <div class="border-t border-white/10 pt-6 text-center text-gray-400 text-xs">
        © 2026 Blac Joyaux. Tout droit réservé. &nbsp;|&nbsp;
        <a href="#" class="hover:text-orange-400">Confidentialité</a> &nbsp;|&nbsp;
        <a href="#" class="hover:text-orange-400">Conditions générales</a>
    </div>
</footer>

<!-- WHATSAPP FLOTTANT -->
<a href="https://wa.me/2250700775537" target="_blank"
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
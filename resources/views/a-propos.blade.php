<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'Histoire de Blac Joyaux | Héritage, Artisanat et Élégance Ivoirienne
</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background:#F5ECD7; }
    </style>
</head>
<body>

<!-- HEADER -->
<header class="border-b border-gray-400 bg-white">
    <div class="relative flex items-center justify-between h-16 px-7">
        <button id="menuBtn" class="border border-gray-500 w-9 h-9 flex justify-center items-center hover:bg-gray-100 transition">
            <i class="fas fa-bars"></i>
        </button>
        <a href="/" class="text-2xl font-extrabold tracking-widest text-black"
   style="font-family: Arial, sans-serif;">
    Blac Joyaux
</a>
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

<!-- À PROPOS DE NOUS -->
<section class="py-12 px-6" style="background:#F5ECD7">
    <div class="max-w-5xl mx-auto">
        <p class="text-center font-semibold mb-6" style="color:#E8820C">À propos de nous</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <div>
                <p class="text-100 leading-relaxed" style="color:#3D2314">
                    <span class="font-bold">Blac Joyaux</span> c'est une Marque de maroquinerie ivoirienne avec savoir réaffirmer féminité la région centrale de la Côte d'Ivoire.<br><br>
                    Son but est de participer à la valorisation du savoir créatif en Côte d'Ivoire et au-delà en proposant des sacs à main made in Côte d'Ivoire, accessibles et qui répondent aux besoins du marché actuel.<br><br>
                    Au quotidien, adoptez Blac Joyaux et donnez une fière allure à votre style.
                </p>
            </div>
            <div class="grid grid-cols-2 gap-3">
                <img src="{{ asset('img/Sac-Blueu.jpg') }}" alt="Sac">
                <img src="{{ asset('img/Sacs-blac-joyaux-2.jpg') }}" alt="Sac">
                <img src="{{ asset('img/Sac-marron.jpg') }}" alt="Sac">
                <img src="{{ asset('img/collection bla.jpg') }}" alt="Sac">
            </div>
        </div>
    </div>
</section>

<!-- LES SYMBOLES -->
<section class="py-10 px-6 bg-white">
    <div class="max-w-5xl mx-auto">
        <p class="text-center font-semibold mb-2" style="color:#E8820C">Nos collections</p>
        <h2 class="text-xl font-bold text-center mb-8" style="color:#3D2314">Les symboles de Blac Joyaux</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="rounded-xl p-6 text-center" style="background:#F5ECD7">
                <h3 class="font-bold mb-2" style="color:#3D2314">Le Joyau de Bla</h3>
                <p class="text-xs text-gray-500 leading-relaxed">Collection centrale de la marque inspirée du poupée ashanti.</p>
            </div>
            <div class="rounded-xl p-6 text-center" style="background:#F5ECD7">
                <h3 class="font-bold mb-2" style="color:#3D2314">Le monogramme DO</h3>
                <p class="text-xs text-gray-500 leading-relaxed">Un hommage marquant la première dame de la Côte d'Ivoire.</p>
            </div>
        </div>
    </div>
</section>

<!-- HISTOIRE -->
<section class="py-12 px-6" style="background:#F5ECD7">
    <div class="max-w-5xl mx-auto">
        <h2 class="text-2xl font-bold text-center mb-10" style="color:#3D2314">
            L'histoire d'une marque qui transforme l'héritage ivoirien en créations contemporaines
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <div>
                <p class="text-sm leading-relaxed mb-4" style="color:#3D2314">
                    <span class="font-bold">Blac Joyaux</span> naît d'une intime conviction : la Côte d'Ivoire a autant de savoirs créatifs qui méritent d'être valorisés.
                </p>
                <p class="text-sm leading-relaxed mb-4" style="color:#3D2314">
                    De cet élan naît le projet suivant : créer une maroquinerie qui incarne notre histoire, celle de la productivité, de l'héritage, de la résilience, des traditions africaines.
                </p>
                <p class="text-sm leading-relaxed" style="color:#3D2314">
                    Chaque sac raconte une ambition, un savoir-faire unique, esthétique et durable, tout en célébrant notre riche culture.
                </p>
            </div>
            <div class="rounded-2xl overflow-hidden shadow-xl">
                <img src="{{ asset('img/download.jpg') }}" alt="Sac" class="w-full h-64 object-cover">

            </div>
        </div>
    </div>
</section>

<!-- NOS FORCES -->
<section class="py-12 px-6" style="background:#3D2314">
    <div class="max-w-5xl mx-auto">
        <h2 class="text-2xl font-bold text-center text-white mb-10">Nos forces</h2>
        <div class="grid grid-cols-2 md:grid-cols-2 gap-6">

            <div class="bg-white rounded-xl p-6 text-center">
                <p class="text-3xl mb-3">👑</p>
                <h3 class="font-bold text-sm mb-2" style="color:#3D2314">1. Héritage culturel ivoirien</h3>
                <p class="text-xs text-gray-500 leading-relaxed">Des créations inspirées de la poupée Joyaux de Bla, symbole d'élégance et de transmission.</p>
            </div>

            <div class="bg-white rounded-xl p-6 text-center">
                <p class="text-3xl mb-3">🧡</p>
                <h3 class="font-bold text-sm mb-2" style="color:#3D2314">2. Savoir-faire artisanal</h3>
                <p class="text-xs text-gray-500 leading-relaxed">Des sacs confectionnés avec des matières de qualité et un savoir-faire approuvé par nos artisans.</p>
            </div>

            <div class="bg-white rounded-xl p-6 text-center">
                <p class="text-3xl mb-3">⭐</p>
                <h3 class="font-bold text-sm mb-2" style="color:#3D2314">3. Qualité & confiance</h3>
                <p class="text-xs text-gray-500 leading-relaxed">Des produits durables, un accompagnement personnalisé une rapide réponse de la Côte d'Ivoire.</p>
            </div>

            <div class="bg-white rounded-xl p-6 text-center">
                <p class="text-3xl mb-3">🧡</p>
                <h3 class="font-bold text-sm mb-2" style="color:#3D2314">4. Élégance au quotidien</h3>
                <p class="text-xs text-gray-500 leading-relaxed">Des créations pensées pour accompagner avec style le quotidien et les moments d'exception.</p>
            </div>

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
<a href="https://wa.me/0708771557" target="_blank"
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

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À Propos — Blac Joyaux</title>
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

<!-- À PROPOS DE NOUS -->
<section class="py-12 px-6" style="background:#F5ECD7">
    <div class="max-w-5xl mx-auto">
        <p class="text-center font-semibold mb-6" style="color:#E8820C">À propos de nous</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <div>
                <p class="text-sm leading-relaxed" style="color:#3D2314">
                    <span class="font-bold">Blac Joyaux</span> est une marque ivoirienne de maroquinerie qui allie héritage culturel, élégance et savoir-faire local.<br><br>
                    À travers des créations inspirées de la poupée Joyaux de Bla, nous proposons des sacs pensés pour accompagner le quotidien avec style et authenticité.
                </p>
            </div>
            <div class="grid grid-cols-2 gap-3">
                <img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=300&q=80" alt="Sac" class="rounded-xl h-32 w-full object-cover">
                <img src="https://images.unsplash.com/photo-1590874103328-eac38a683ce7?w=300&q=80" alt="Sac" class="rounded-xl h-32 w-full object-cover">
                <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=300&q=80" alt="Sac" class="rounded-xl h-32 w-full object-cover">
                <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?w=300&q=80" alt="Sac" class="rounded-xl h-32 w-full object-cover">
            </div>
        </div>
    </div>
</section>

<!-- LES SYMBOLES -->
<section class="py-10 px-6 bg-white">
    <div class="max-w-5xl mx-auto">
        <p class="text-center font-semibold mb-6" style="color:#E8820C">Nos collections</p>
        <h2 class="text-2xl font-bold text-center mb-8" style="color:#3D2314">Les symboles de Blac Joyaux</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="rounded-xl p-6 text-center" style="background:#F5ECD7">
                <h3 class="font-bold mb-2" style="color:#3D2314">Le Joyaux de Bla</h3>
                <p class="text-xs text-gray-500 leading-relaxed">Collection centrale de la marque inspirée de la poupée de fécondité ashanti.</p>
            </div>
            <div class="rounded-xl p-6 text-center" style="background:#F5ECD7">
                <h3 class="font-bold mb-2" style="color:#3D2314">Le Monogramme DO</h3>
                <p class="text-xs text-gray-500 leading-relaxed">Le monogramme à qui la prominence donne de la Côte d'Ivoire.</p>
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
                    <span class="font-bold">Blac Joyaux</span> est née de la volonté de valoriser le patrimoine <span class="font-bold" style="color:#E8820C">ivoirien</span> à travers une maroquinerie contemporaine.
                </p>
                <p class="text-sm leading-relaxed mb-4" style="color:#3D2314">
                    Chaque création associe héritage, qualité et élégance, pour offrir bien plus qu'un sac : une histoire à porter.
                </p>
            </div>
            <div class="rounded-2xl overflow-hidden shadow-xl">
                <img src="https://images.unsplash.com/photo-1574180566232-aaad1b5b8450?w=600&q=80"
                     alt="Héritage africain" class="w-full h-64 object-cover">
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
                <p class="text-3xl mb-3">⭐</p>
                <h3 class="font-bold text-sm mb-2" style="color:#3D2314">1. Héritage culturel ivoirien</h3>
                <p class="text-xs text-gray-500 leading-relaxed">Des créations ancrées dans la richesse de la poupée Joyaux de Bla, symbole culturel de transmission.</p>
            </div>

            <div class="bg-white rounded-xl p-6 text-center">
                <p class="text-3xl mb-3">🧡</p>
                <h3 class="font-bold text-sm mb-2" style="color:#3D2314">2. Savoir-faire artisanal</h3>
                <p class="text-xs text-gray-500 leading-relaxed">Des sacs confectionnés avec soin par nos artisans locaux qui ont appris auprès des meilleurs.</p>
            </div>

            <div class="bg-white rounded-xl p-6 text-center">
                <p class="text-3xl mb-3">⭐</p>
                <h3 class="font-bold text-sm mb-2" style="color:#3D2314">3. Qualité & confiance</h3>
                <p class="text-xs text-gray-500 leading-relaxed">Des produits solides et accompagnement personnalisé pour accompagner nos clientes partout en Côte d'Ivoire.</p>
            </div>

            <div class="bg-white rounded-xl p-6 text-center">
                <p class="text-3xl mb-3">🧡</p>
                <h3 class="font-bold text-sm mb-2" style="color:#3D2314">4. Élégance au quotidien</h3>
                <p class="text-xs text-gray-500 leading-relaxed">Des créations pensées pour accompagner la femme ivoirienne dans toutes ses circonstances d'exception.</p>
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

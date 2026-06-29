<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capsule 2026 — Blac Joyaux</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background:#F5ECD7; }
        .product-card { transition: all 0.3s ease; }
        .product-card:hover { transform: translateY(-4px); }
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

<!-- HERO CAPSULE -->
<section class="relative py-20 px-6 text-white text-center"
         style="background-image:linear-gradient(rgba(61,35,20,0.75),rgba(61,35,20,0.75)),url('https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=1400&q=80');background-size:cover;background-position:center">
    <p class="text-sm font-medium tracking-widest uppercase mb-3" style="color:#E8820C">Nouveauté 2026</p>
    <h1 class="text-4xl font-bold mb-4" style="font-family:'Playfair Display',serif">Collection Capsule</h1>
    <p class="text-gray-200 max-w-lg mx-auto text-sm leading-relaxed mb-6">
        Une collection exclusive de 3 nouveaux modèles pensés pour la femme ivoirienne moderne.
        Des pièces uniques alliant héritage et élégance contemporaine.
    </p>
    <a href="#modeles" class="inline-block font-semibold px-8 py-3 rounded-full text-sm transition" style="background:#E8820C;color:#fff">
        Découvrir les modèles
    </a>
</section>

<!-- CONCEPT -->
<section class="py-12 px-6 bg-white">
    <div class="max-w-4xl mx-auto text-center">
        <p class="text-sm font-medium tracking-widest uppercase mb-3" style="color:#E8820C">Le concept</p>
        <h2 class="text-2xl font-bold mb-6" style="color:#3D2314">Une capsule pensée pour offrir et se démarquer</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-6 rounded-2xl" style="background:#F5ECD7">
                <p class="text-3xl mb-3">🎁</p>
                <h3 class="font-bold text-sm mb-2" style="color:#3D2314">Usage cadeau</h3>
                <p class="text-xs text-gray-500 leading-relaxed">Nos clientes achètent souvent Blac Joyaux pour offrir. Cette capsule est pensée pour être le cadeau parfait.</p>
            </div>
            <div class="p-6 rounded-2xl" style="background:#F5ECD7">
                <p class="text-3xl mb-3">💼</p>
                <h3 class="font-bold text-sm mb-2" style="color:#3D2314">Sac de bureau</h3>
                <p class="text-xs text-gray-500 leading-relaxed">Le modèle manquant à notre collection. Un sac élégant pour la femme cadre active d'Abidjan.</p>
            </div>
            <div class="p-6 rounded-2xl" style="background:#F5ECD7">
                <p class="text-3xl mb-3">✨</p>
                <h3 class="font-bold text-sm mb-2" style="color:#3D2314">Édition limitée</h3>
                <p class="text-xs text-gray-500 leading-relaxed">3 modèles exclusifs, fabriqués en quantité limitée par nos artisans à Abidjan.</p>
            </div>
        </div>
    </div>
</section>

<!-- LES 3 MODÈLES -->
<section id="modeles" class="py-12 px-6" style="background:#F5ECD7">
    <div class="max-w-5xl mx-auto">
        <p class="text-sm font-medium tracking-widest uppercase text-center mb-3" style="color:#E8820C">Les modèles</p>
        <h2 class="text-2xl font-bold text-center mb-10" style="color:#3D2314">3 nouveaux modèles exclusifs</h2>

        <!-- Modèle 1 — Sac de bureau -->
        <div class="bg-white rounded-2xl overflow-hidden shadow-sm mb-8">
            <div class="md:flex">
                <div class="md:w-1/2">
                    <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=600&q=80"
                         alt="Sac Bureau Akwaba" class="w-full h-72 object-cover">
                </div>
                <div class="md:w-1/2 p-8 flex flex-col justify-center">
                    <span class="text-xs font-medium px-3 py-1 rounded-full mb-3 inline-block w-fit text-white" style="background:#E8820C">Modèle 1 — Focus bureau</span>
                    <h3 class="text-2xl font-bold mb-3" style="color:#3D2314">Le Akwaba</h3>
                    <p class="text-xs text-gray-500 leading-relaxed mb-4">
                        Akwaba signifie "Bienvenue" en langue akan. Ce sac de bureau élégant accompagne la femme cadre dans son quotidien professionnel avec style et authenticité ivoirienne.
                    </p>
                    <div class="grid grid-cols-2 gap-3 text-xs mb-6">
                        <div class="bg-gray-50 rounded-lg p-3">
                            <p class="text-gray-400 mb-1">Matière</p>
                            <p class="font-semibold" style="color:#3D2314">Cuir véritable</p>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-3">
                            <p class="text-gray-400 mb-1">Dimensions</p>
                            <p class="font-semibold" style="color:#3D2314">35 × 28 × 12 cm</p>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-3">
                            <p class="text-gray-400 mb-1">Couleurs</p>
                            <p class="font-semibold" style="color:#3D2314">Noir · Marron · Beige</p>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-3">
                            <p class="text-gray-400 mb-1">Prix</p>
                            <p class="font-bold" style="color:#E8820C">85 000 FCFA</p>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <a href="/panier" class="flex-1 text-center text-white font-semibold py-3 rounded-xl text-sm" style="background:#3D2314">
                            Ajouter au panier
                        </a>
                        <a href="https://wa.me/2250700775537?text=Bonjour, je veux commander le sac Akwaba capsule 2026 à 85 000 FCFA"
                           target="_blank"
                           class="flex-1 text-center text-white font-semibold py-3 rounded-xl text-sm" style="background:#25D366">
                            💬 WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modèle 2 — Sac cadeau -->
        <div class="bg-white rounded-2xl overflow-hidden shadow-sm mb-8">
            <div class="md:flex flex-row-reverse">
                <div class="md:w-1/2">
                    <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?w=600&q=80"
                         alt="Sac Cadeau Aya" class="w-full h-72 object-cover">
                </div>
                <div class="md:w-1/2 p-8 flex flex-col justify-center">
                    <span class="text-xs font-medium px-3 py-1 rounded-full mb-3 inline-block w-fit text-white" style="background:#3D2314">Modèle 2 — Cadeau premium</span>
                    <h3 class="text-2xl font-bold mb-3" style="color:#3D2314">Le Aya</h3>
                    <p class="text-xs text-gray-500 leading-relaxed mb-4">
                        Aya signifie "fougère" en akan, symbole de persévérance et d'endurance. Ce sac élégant est la parfaite attention pour offrir à une femme forte et accomplie.
                    </p>
                    <div class="grid grid-cols-2 gap-3 text-xs mb-6">
                        <div class="bg-gray-50 rounded-lg p-3">
                            <p class="text-gray-400 mb-1">Matière</p>
                            <p class="font-semibold" style="color:#3D2314">Cuir grainé</p>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-3">
                            <p class="text-gray-400 mb-1">Dimensions</p>
                            <p class="font-semibold" style="color:#3D2314">28 × 22 × 10 cm</p>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-3">
                            <p class="text-gray-400 mb-1">Couleurs</p>
                            <p class="font-semibold" style="color:#3D2314">Caramel · Rouge · Violet</p>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-3">
                            <p class="text-gray-400 mb-1">Prix</p>
                            <p class="font-bold" style="color:#E8820C">70 000 FCFA</p>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <a href="/panier" class="flex-1 text-center text-white font-semibold py-3 rounded-xl text-sm" style="background:#3D2314">
                            Ajouter au panier
                        </a>
                        <a href="https://wa.me/2250700775537?text=Bonjour, je veux commander le sac Aya capsule 2026 à 70 000 FCFA"
                           target="_blank"
                           class="flex-1 text-center text-white font-semibold py-3 rounded-xl text-sm" style="background:#25D366">
                            💬 WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modèle 3 — Mini sac soirée -->
        <div class="bg-white rounded-2xl overflow-hidden shadow-sm mb-8">
            <div class="md:flex">
                <div class="md:w-1/2">
                    <img src="https://images.unsplash.com/photo-1591561954557-26941169b49e?w=600&q=80"
                         alt="Mini Sac Soirée Abla" class="w-full h-72 object-cover">
                </div>
                <div class="md:w-1/2 p-8 flex flex-col justify-center">
                    <span class="text-xs font-medium px-3 py-1 rounded-full mb-3 inline-block w-fit text-white" style="background:#E8820C">Modèle 3 — Soirée & cérémonie</span>
                    <h3 class="text-2xl font-bold mb-3" style="color:#3D2314">Le Abla</h3>
                    <p class="text-xs text-gray-500 leading-relaxed mb-4">
                        Abla signifie "née un mardi" en akan. Ce mini sac de soirée est conçu pour les femmes qui veulent briller lors des cérémonies et événements spéciaux.
                    </p>
                    <div class="grid grid-cols-2 gap-3 text-xs mb-6">
                        <div class="bg-gray-50 rounded-lg p-3">
                            <p class="text-gray-400 mb-1">Matière</p>
                            <p class="font-semibold" style="color:#3D2314">Cuir satiné</p>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-3">
                            <p class="text-gray-400 mb-1">Dimensions</p>
                            <p class="font-semibold" style="color:#3D2314">20 × 15 × 8 cm</p>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-3">
                            <p class="text-gray-400 mb-1">Couleurs</p>
                            <p class="font-semibold" style="color:#3D2314">Or · Noir · Bordeaux</p>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-3">
                            <p class="text-gray-400 mb-1">Prix</p>
                            <p class="font-bold" style="color:#E8820C">60 000 FCFA</p>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <a href="/panier" class="flex-1 text-center text-white font-semibold py-3 rounded-xl text-sm" style="background:#3D2314">
                            Ajouter au panier
                        </a>
                        <a href="https://wa.me/2250700775537?text=Bonjour, je veux commander le sac Abla capsule 2026 à 60 000 FCFA"
                           target="_blank"
                           class="flex-1 text-center text-white font-semibold py-3 rounded-xl text-sm" style="background:#25D366">
                            💬 WhatsApp
                        </a>
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
                <li><a href="/capsule" class="hover:text-orange-400">Capsule 2026</a></li>
            </ul>
        </div>
        <div>
            <h4 class="font-semibold mb-4 uppercase text-xs tracking-widest" style="color:#E8820C">Support</h4>
            <ul class="text-gray-300 space-y-2 text-xs">
                <li><a href="/contact" class="hover:text-orange-400">Contacts</a></li>
                <li><a href="/actualites" class="hover:text-orange-400">Actualités</a></li>
                <li><a href="/faq" class="hover:text-orange-400">FAQ</a></li>
                <li><a href="/legal" class="hover:text-orange-400">Pages légales</a></li>
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
        <a href="/legal" class="hover:text-orange-400">Confidentialité</a> &nbsp;|&nbsp;
        <a href="/legal" class="hover:text-orange-400">Conditions générales</a>
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

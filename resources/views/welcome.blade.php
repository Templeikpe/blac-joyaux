<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blac Joyaux — Maroquinerie Premium Made in CI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'or':    '#C9A84C',
                        'noir':  '#1A1A1A',
                        'beige': '#F5F0E8',
                    },
                    fontFamily: {
                        'display': ['Playfair Display', 'serif'],
                        'body':    ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .hero-bg {
            background-image: linear-gradient(rgba(26,26,26,0.65), rgba(26,26,26,0.65)),
                              url('https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=1400&q=80');
            background-size: cover;
            background-position: center;
        }
        .collection-img { transition: transform 0.4s ease; }
        .collection-card:hover .collection-img { transform: scale(1.05); }
        .product-card { transition: all 0.3s ease; }
        .product-card:hover { transform: translateY(-4px); box-shadow: 0 12px 30px rgba(201,168,76,0.15); }
    </style>
</head>
<body class="bg-beige text-noir">

<!-- NAVBAR -->
<nav class="bg-beige border-b border-yellow-200 px-6 py-3 sticky top-0 z-50 shadow-sm">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <a href="#" class="font-bold text-2xl tracking-widest text-noir" style="font-family:'Playfair Display',serif">
            BLAC <span style="color:#C9A84C">JOYAUX</span>
        </a>
        <div class="hidden md:flex gap-8 text-sm font-medium">
            <a href="#" class="border-b-2 text-noir" style="border-color:#C9A84C">Accueil</a>
            <a href="a-propos" class="hover:text-yellow-600 text-noir">À Propos</a>
            <a href="boutique" class="hover:text-yellow-600 text-noir">Nos Collections</a>
            <a href="actualites" class="hover:text-yellow-600 text-noir">Actualités</a>
            <a href="contact" class="hover:text-yellow-600 text-noir">Contact</a>
        </div>
        <div class="flex items-center gap-4">
            <span class="text-lg cursor-pointer">🇨🇮</span>
            <a href="#" class="relative text-noir text-xl">
                🛒
                <span class="absolute -top-1 -right-2 text-xs rounded-full w-4 h-4 flex items-center justify-center font-bold text-noir" style="background:#C9A84C">0</span>
            </a>
            <a href="#" class="text-white text-xs font-medium px-5 py-2 rounded-full transition-all" style="background:#1A1A1A">
                Se connecter
            </a>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="hero-bg text-white text-center py-32 px-6">
    <div class="max-w-2xl mx-auto">
        <p class="text-sm font-medium tracking-widest uppercase mb-4" style="color:#C9A84C">Maroquinerie Premium · Made in Côte d'Ivoire</p>
        <h1 class="text-5xl md:text-6xl font-bold leading-tight mb-6" style="font-family:'Playfair Display',serif">
            L'avenir<br><span style="color:#C9A84C">en main</span>
        </h1>
        <p class="text-gray-300 text-lg mb-10">Des créations inspirées de l'héritage ivoirien pour accompagner votre quotidien.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#" class="font-semibold px-8 py-3 rounded-full transition-all text-noir" style="background:#C9A84C">
                Découvrir la boutique
            </a>
            <a href="#" class="border border-white text-white font-medium px-8 py-3 rounded-full hover:border-yellow-400 hover:text-yellow-400 transition-all">
                Notre histoire
            </a>
        </div>
    </div>
</section>

<!-- RÉASSURANCE -->
<section class="py-8 px-6" style="background:#1A1A1A">
    <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 text-center text-white">
        <div class="flex flex-col items-center gap-2">
            <span class="text-3xl" style="color:#C9A84C">✦</span>
            <p class="font-semibold">Authentique Made in CI</p>
            <p class="text-gray-400 text-sm">Fabriqué artisanalement à Abidjan</p>
        </div>
        <div class="flex flex-col items-center gap-2">
            <span class="text-3xl" style="color:#C9A84C">🚚</span>
            <p class="font-semibold">Livraison 1 à 3 jours</p>
            <p class="text-gray-400 text-sm">Partout en Côte d'Ivoire</p>
        </div>
        <div class="flex flex-col items-center gap-2">
            <span class="text-3xl" style="color:#C9A84C">📱</span>
            <p class="font-semibold">Paiement Mobile Money</p>
            <p class="text-gray-400 text-sm">Wave · Orange Money · MTN MoMo</p>
        </div>
    </div>
</section>

<!-- NOS COLLECTIONS -->
<section class="py-16 px-6" style="background:#F5F0E8">
    <div class="max-w-6xl mx-auto">
        <p class="text-sm font-medium tracking-widest uppercase text-center mb-2" style="color:#C9A84C">Explorez</p>
        <h2 class="text-3xl font-bold text-center mb-12" style="font-family:'Playfair Display',serif">Nos deux collections de sacs made in Côte d'Ivoire</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="collection-card relative overflow-hidden rounded-2xl cursor-pointer">
                <div class="overflow-hidden h-72">
                    <img src="https://images.unsplash.com/photo-1590874103328-eac38a683ce7?w=800&q=80"
                         alt="Collection Joyau de Bla" class="collection-img w-full h-full object-cover">
                </div>
                <div class="absolute inset-0 flex flex-col justify-end p-6" style="background:linear-gradient(to top, rgba(26,26,26,0.85), transparent)">
                    <p class="text-xs tracking-widest uppercase mb-1" style="color:#C9A84C">Collection phare</p>
                    <h3 class="text-white text-2xl font-bold mb-3" style="font-family:'Playfair Display',serif">Joyau de Bla</h3>
                    <a href="#" class="text-white text-sm border border-white/50 px-4 py-2 rounded-full w-fit hover:border-yellow-400 hover:text-yellow-400 transition-all">
                        Voir la collection →
                    </a>
                </div>
            </div>
            <div class="collection-card relative overflow-hidden rounded-2xl cursor-pointer">
                <div class="overflow-hidden h-72">
                    <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=800&q=80"
                         alt="Collection DO" class="collection-img w-full h-full object-cover">
                </div>
                <div class="absolute inset-0 flex flex-col justify-end p-6" style="background:linear-gradient(to top, rgba(26,26,26,0.85), transparent)">
                    <p class="text-xs tracking-widest uppercase mb-1" style="color:#C9A84C">Collection</p>
                    <h3 class="text-white text-2xl font-bold mb-3" style="font-family:'Playfair Display',serif">Collection DO</h3>
                    <a href="#" class="text-white text-sm border border-white/50 px-4 py-2 rounded-full w-fit hover:border-yellow-400 hover:text-yellow-400 transition-all">
                        Voir la collection →
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MEILLEURES VENTES -->
<section class="py-16 px-6 bg-white">
    <div class="max-w-6xl mx-auto">
        <p class="text-sm font-medium tracking-widest uppercase text-center mb-2" style="color:#C9A84C">Nos favoris</p>
        <h2 class="text-3xl font-bold text-center mb-12" style="font-family:'Playfair Display',serif">Meilleures ventes</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="product-card rounded-2xl overflow-hidden cursor-pointer" style="background:#F5F0E8">
                <div class="h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=400&q=80" alt="Sac 1" class="w-full h-full object-cover">
                </div>
                <div class="p-4">
                    <p class="text-xs font-medium mb-1" style="color:#C9A84C">Joyau de Bla</p>
                    <h4 class="font-semibold text-sm mb-2">Sac à main Noir</h4>
                    <p class="font-bold text-sm" style="color:#C9A84C">50 000 FCFA</p>
                    <button class="mt-3 w-full text-white text-xs py-2 rounded-full transition-all" style="background:#1A1A1A">
                        Ajouter au panier
                    </button>
                </div>
            </div>
            <div class="product-card rounded-2xl overflow-hidden cursor-pointer" style="background:#F5F0E8">
                <div class="h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1590874103328-eac38a683ce7?w=400&q=80" alt="Sac 2" class="w-full h-full object-cover">
                </div>
                <div class="p-4">
                    <p class="text-xs font-medium mb-1" style="color:#C9A84C">Collection DO</p>
                    <h4 class="font-semibold text-sm mb-2">Sac Cuir Marron</h4>
                    <p class="font-bold text-sm" style="color:#C9A84C">70 000 FCFA</p>
                    <button class="mt-3 w-full text-white text-xs py-2 rounded-full transition-all" style="background:#1A1A1A">
                        Ajouter au panier
                    </button>
                </div>
            </div>
            <div class="product-card rounded-2xl overflow-hidden cursor-pointer" style="background:#F5F0E8">
                <div class="h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=400&q=80" alt="Sac 3" class="w-full h-full object-cover">
                </div>
                <div class="p-4">
                    <p class="text-xs font-medium mb-1" style="color:#C9A84C">Capsule</p>
                    <h4 class="font-semibold text-sm mb-2">Sac Bureau Premium</h4>
                    <p class="font-bold text-sm" style="color:#C9A84C">85 000 FCFA</p>
                    <button class="mt-3 w-full text-white text-xs py-2 rounded-full transition-all" style="background:#1A1A1A">
                        Ajouter au panier
                    </button>
                </div>
            </div>
            <div class="product-card rounded-2xl overflow-hidden cursor-pointer" style="background:#F5F0E8">
                <div class="h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?w=400&q=80" alt="Sac 4" class="w-full h-full object-cover">
                </div>
                <div class="p-4">
                    <p class="text-xs font-medium mb-1" style="color:#C9A84C">Joyau de Bla</p>
                    <h4 class="font-semibold text-sm mb-2">Sac à main Caramel</h4>
                    <p class="font-bold text-sm" style="color:#C9A84C">60 000 FCFA</p>
                    <button class="mt-3 w-full text-white text-xs py-2 rounded-full transition-all" style="background:#1A1A1A">
                        Ajouter au panier
                    </button>
                </div>
            </div>
        </div>
        <div class="text-center mt-10">
            <a href="#" class="border-2 font-medium px-8 py-3 rounded-full transition-all" style="border-color:#1A1A1A;color:#1A1A1A">
                Voir toute la boutique
            </a>
        </div>
    </div>
</section>

<!-- NOTRE HISTOIRE -->
<section class="py-16 px-6" style="background:#F5F0E8">
    <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div>
            <p class="text-sm font-medium tracking-widest uppercase mb-2" style="color:#C9A84C">Notre histoire</p>
            <h2 class="text-3xl font-bold mb-6" style="font-family:'Playfair Display',serif">Des Joyaux noirs qui se portent en héritage avec élégance</h2>
            <p class="text-gray-600 leading-relaxed mb-4">Blac Joyaux naît en 2024 d'une vision de Manuela Kouadio : valoriser l'artisanat ivoirien et créer des pièces qui allient héritage africain et élégance contemporaine.</p>
            <p class="text-gray-600 leading-relaxed mb-8">La collection phare <span class="font-semibold" style="color:#C9A84C">Joyau de Bla</span>, inspirée de la poupée de fécondité ashanti, incarne cet héritage visible dans chaque couture.</p>
            <a href="#" class="text-white font-medium px-8 py-3 rounded-full transition-all" style="background:#1A1A1A">
                En savoir plus
            </a>
        </div>
        <div class="rounded-2xl overflow-hidden shadow-xl">
            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=600&q=80" alt="Showroom Blac Joyaux" class="w-full h-80 object-cover">
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="py-16 px-6 bg-white">
    <div class="max-w-3xl mx-auto">
        <p class="text-sm font-medium tracking-widest uppercase text-center mb-2" style="color:#C9A84C">Questions fréquentes</p>
        <h2 class="text-3xl font-bold text-center mb-10" style="font-family:'Playfair Display',serif">FAQ</h2>
        <div class="space-y-4">
            <details class="rounded-xl px-6 py-4 cursor-pointer" style="background:#F5F0E8">
                <summary class="font-semibold flex justify-between items-center">
                    Où acheter Blac Joyaux ?
                    <span style="color:#C9A84C">+</span>
                </summary>
                <p class="text-gray-600 text-sm mt-3 leading-relaxed">Vous pouvez acheter directement sur notre site ou visiter notre showroom à Cocody Palmeraie, Abidjan.</p>
            </details>
            <details class="rounded-xl px-6 py-4 cursor-pointer" style="background:#F5F0E8">
                <summary class="font-semibold flex justify-between items-center">
                    Quels moyens de paiement sont acceptés ?
                    <span style="color:#C9A84C">+</span>
                </summary>
                <p class="text-gray-600 text-sm mt-3 leading-relaxed">Nous acceptons les espèces à la livraison, Wave, Orange Money et MTN MoMo.</p>
            </details>
            <details class="rounded-xl px-6 py-4 cursor-pointer" style="background:#F5F0E8">
                <summary class="font-semibold flex justify-between items-center">
                    Quels sont les délais de livraison ?
                    <span style="color:#C9A84C">+</span>
                </summary>
                <p class="text-gray-600 text-sm mt-3 leading-relaxed">La livraison est effectuée sous 1 à 3 jours ouvrables à Abidjan et dans les principales villes de Côte d'Ivoire.</p>
            </details>
            <details class="rounded-xl px-6 py-4 cursor-pointer" style="background:#F5F0E8">
                <summary class="font-semibold flex justify-between items-center">
                    Les sacs sont-ils fabriqués en Côte d'Ivoire ?
                    <span style="color:#C9A84C">+</span>
                </summary>
                <p class="text-gray-600 text-sm mt-3 leading-relaxed">Oui, tous nos sacs sont fabriqués artisanalement à Abidjan par un artisan ivoirien talentueux. 100% Made in CI.</p>
            </details>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="text-white py-12 px-6" style="background:#1A1A1A">
    <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 text-sm mb-10">
        <div>
            <h3 class="text-lg font-bold mb-4" style="font-family:'Playfair Display',serif;color:#C9A84C">BLAC JOYAUX</h3>
            <p class="text-gray-400 leading-relaxed text-xs">Maroquinerie premium ivoirienne. Des créations inspirées de l'héritage africain.</p>
            <div class="flex gap-3 mt-4 text-xl">
                <a href="#" class="hover:text-yellow-400">📸</a>
                <a href="#" class="hover:text-yellow-400">🎵</a>
                <a href="#" class="hover:text-yellow-400">📘</a>
                <a href="#" class="hover:text-yellow-400">💬</a>
            </div>
        </div>
        <div>
            <h4 class="font-semibold mb-4 uppercase text-xs tracking-widest" style="color:#C9A84C">Collections</h4>
            <ul class="text-gray-400 space-y-2 text-xs">
                <li><a href="#" class="hover:text-yellow-400">Joyau de Bla</a></li>
                <li><a href="#" class="hover:text-yellow-400">Collection DO</a></li>
                <li><a href="#" class="hover:text-yellow-400">Capsule 2026</a></li>
            </ul>
        </div>
        <div>
            <h4 class="font-semibold mb-4 uppercase text-xs tracking-widest" style="color:#C9A84C">Support</h4>
            <ul class="text-gray-400 space-y-2 text-xs">
                <li><a href="#" class="hover:text-yellow-400">FAQ</a></li>
                <li><a href="#" class="hover:text-yellow-400">Contact</a></li>
                <li><a href="#" class="hover:text-yellow-400">Actualités</a></li>
                <li><a href="#" class="hover:text-yellow-400">Conditions de livraison</a></li>
                <li><a href="#" class="hover:text-yellow-400">Politique de retour</a></li>
            </ul>
        </div>
        <div>
            <h4 class="font-semibold mb-4 uppercase text-xs tracking-widest" style="color:#C9A84C">Showroom</h4>
            <p class="text-gray-400 text-xs leading-relaxed">
                Côte d'Ivoire · Commune de Cocody<br>
                Rond-point de la Riviera Palmeraie<br><br>
                Lundi au samedi · 09h00 à 18h00<br><br>
                <span style="color:#C9A84C">+225 07 00 77 55 37</span>
            </p>
        </div>
    </div>
    <div class="border-t border-white/10 pt-6 text-center text-gray-500 text-xs">
        © 2026 Blac Joyaux. Tout droit réservé. &nbsp;|&nbsp;
        <a href="#" class="hover:text-yellow-400">Confidentialité</a> &nbsp;|&nbsp;
        <a href="#" class="hover:text-yellow-400">Conditions générales</a>
    </div>
</footer>

<!-- WHATSAPP FLOTTANT -->
<a href="https://wa.me/2250700775537" target="_blank"
   class="fixed bottom-6 right-6 bg-green-500 text-white rounded-full w-14 h-14 flex items-center justify-center text-2xl shadow-xl hover:bg-green-600 transition-all z-50">
    💬
</a>

</body>
</html>

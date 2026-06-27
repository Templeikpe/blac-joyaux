<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique — Blac Joyaux</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .product-card { transition: all 0.3s ease; }
        .product-card:hover { transform: translateY(-4px); box-shadow: 0 12px 30px rgba(201,168,76,0.15); }
    </style>
</head>
<body style="background:#F5F0E8">

<!-- NAVBAR -->
<nav class="border-b border-yellow-200 px-6 py-3 sticky top-0 z-50 shadow-sm" style="background:#F5F0E8">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <a href="/" class="font-bold text-2xl tracking-widest" style="font-family:'Playfair Display',serif;color:#1A1A1A">
            BLAC <span style="color:#C9A84C">JOYAUX</span>
        </a>
        <div class="hidden md:flex gap-8 text-sm font-medium">
            <a href="/" class="hover:text-yellow-600" style="color:#1A1A1A">Accueil</a>
            <a href="/a-propos" class="hover:text-yellow-600" style="color:#1A1A1A">À Propos</a>
            <a href="/boutique" class="border-b-2 font-semibold" style="border-color:#C9A84C;color:#C9A84C">Nos Collections</a>
            <a href="/actualites" class="hover:text-yellow-600" style="color:#1A1A1A">Actualités</a>
            <a href="/contact" class="hover:text-yellow-600" style="color:#1A1A1A">Contact</a>
        </div>
        <div class="flex items-center gap-4">
            <span class="text-lg cursor-pointer">🇨🇮</span>
            <a href="/panier" class="relative text-xl" style="color:#1A1A1A">
                🛒
                <span class="absolute -top-1 -right-2 text-xs rounded-full w-4 h-4 flex items-center justify-center font-bold" style="background:#C9A84C;color:#1A1A1A">0</span>
            </a>
            <a href="#" class="text-white text-xs font-medium px-5 py-2 rounded-full" style="background:#1A1A1A">
                Se connecter
            </a>
        </div>
    </div>
</nav>

<!-- HEADER BOUTIQUE -->
<section class="py-12 px-6 text-center" style="background:#1A1A1A">
    <p class="text-sm font-medium tracking-widest uppercase mb-2" style="color:#C9A84C">Découvrez</p>
    <h1 class="text-4xl font-bold text-white" style="font-family:'Playfair Display',serif">Notre Boutique</h1>
    <p class="text-gray-400 mt-3 text-sm">Sacs à main premium fabriqués artisanalement en Côte d'Ivoire</p>
</section>

<!-- FILTRES -->
<section class="py-6 px-6 bg-white border-b border-gray-100">
    <div class="max-w-6xl mx-auto flex flex-wrap gap-3 items-center">
        <span class="text-sm font-semibold" style="color:#1A1A1A">Filtrer :</span>
        <button onclick="filtrer('tous')" class="filtre-btn px-4 py-2 rounded-full text-sm font-medium border-2 transition-all actif" style="border-color:#C9A84C;background:#C9A84C;color:#1A1A1A">
            Tous
        </button>
        <button onclick="filtrer('joyau')" class="filtre-btn px-4 py-2 rounded-full text-sm font-medium border-2 transition-all" style="border-color:#1A1A1A;color:#1A1A1A">
            Joyau de Bla
        </button>
        <button onclick="filtrer('do')" class="filtre-btn px-4 py-2 rounded-full text-sm font-medium border-2 transition-all" style="border-color:#1A1A1A;color:#1A1A1A">
            Collection DO
        </button>
        <button onclick="filtrer('capsule')" class="filtre-btn px-4 py-2 rounded-full text-sm font-medium border-2 transition-all" style="border-color:#1A1A1A;color:#1A1A1A">
            Capsule 2026
        </button>

        <!-- Filtre prix -->
        <select class="ml-auto px-4 py-2 rounded-full text-sm border-2 outline-none cursor-pointer" style="border-color:#1A1A1A;color:#1A1A1A">
            <option>Tous les prix</option>
            <option>40 000 – 60 000 FCFA</option>
            <option>60 000 – 80 000 FCFA</option>
            <option>80 000 – 100 000 FCFA</option>
        </select>
    </div>
</section>

<!-- GRILLE PRODUITS -->
<section class="py-12 px-6">
    <div class="max-w-6xl mx-auto">

        <!-- Résultats -->
        <p class="text-sm text-gray-500 mb-8">12 produits trouvés</p>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6" id="grille-produits">

            <!-- Produit 1 -->
            <div class="product-card rounded-2xl overflow-hidden cursor-pointer bg-white" data-collection="joyau">
                <div class="h-52 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=400&q=80" alt="Sac Joyau de Bla Noir" class="w-full h-full object-cover">
                    <span class="absolute top-3 left-3 text-xs px-3 py-1 rounded-full font-medium" style="background:#C9A84C;color:#1A1A1A">Joyau de Bla</span>
                </div>
                <div class="p-4">
                    <h4 class="font-semibold text-sm mb-1" style="color:#1A1A1A">Sac à main Noir</h4>
                    <p class="text-xs text-gray-500 mb-3">Cuir véritable · Noir</p>
                    <p class="font-bold text-sm mb-3" style="color:#C9A84C">50 000 FCFA</p>
                    <div class="flex gap-2">
                        <button class="flex-1 text-white text-xs py-2 rounded-full" style="background:#1A1A1A">
                            + Panier
                        </button>
                        <a href="/boutique/1" class="flex-1 text-center text-xs py-2 rounded-full border-2" style="border-color:#1A1A1A;color:#1A1A1A">
                            Voir
                        </a>
                    </div>
                </div>
            </div>

            <!-- Produit 2 -->
            <div class="product-card rounded-2xl overflow-hidden cursor-pointer bg-white" data-collection="do">
                <div class="h-52 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1590874103328-eac38a683ce7?w=400&q=80" alt="Sac DO Marron" class="w-full h-full object-cover">
                    <span class="absolute top-3 left-3 text-xs px-3 py-1 rounded-full font-medium" style="background:#1A1A1A;color:#C9A84C">Collection DO</span>
                </div>
                <div class="p-4">
                    <h4 class="font-semibold text-sm mb-1" style="color:#1A1A1A">Sac Cuir Marron</h4>
                    <p class="text-xs text-gray-500 mb-3">Cuir véritable · Marron</p>
                    <p class="font-bold text-sm mb-3" style="color:#C9A84C">70 000 FCFA</p>
                    <div class="flex gap-2">
                        <button class="flex-1 text-white text-xs py-2 rounded-full" style="background:#1A1A1A">
                            + Panier
                        </button>
                        <a href="/boutique/2" class="flex-1 text-center text-xs py-2 rounded-full border-2" style="border-color:#1A1A1A;color:#1A1A1A">
                            Voir
                        </a>
                    </div>
                </div>
            </div>

            <!-- Produit 3 -->
            <div class="product-card rounded-2xl overflow-hidden cursor-pointer bg-white" data-collection="capsule">
                <div class="h-52 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=400&q=80" alt="Sac Bureau Capsule" class="w-full h-full object-cover">
                    <span class="absolute top-3 left-3 text-xs px-3 py-1 rounded-full font-medium text-white" style="background:#C9A84C">Capsule 2026</span>
                </div>
                <div class="p-4">
                    <h4 class="font-semibold text-sm mb-1" style="color:#1A1A1A">Sac Bureau Premium</h4>
                    <p class="text-xs text-gray-500 mb-3">Cuir véritable · Noir</p>
                    <p class="font-bold text-sm mb-3" style="color:#C9A84C">85 000 FCFA</p>
                    <div class="flex gap-2">
                        <button class="flex-1 text-white text-xs py-2 rounded-full" style="background:#1A1A1A">
                            + Panier
                        </button>
                        <a href="/boutique/3" class="flex-1 text-center text-xs py-2 rounded-full border-2" style="border-color:#1A1A1A;color:#1A1A1A">
                            Voir
                        </a>
                    </div>
                </div>
            </div>

            <!-- Produit 4 -->
            <div class="product-card rounded-2xl overflow-hidden cursor-pointer bg-white" data-collection="joyau">
                <div class="h-52 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?w=400&q=80" alt="Sac Caramel" class="w-full h-full object-cover">
                    <span class="absolute top-3 left-3 text-xs px-3 py-1 rounded-full font-medium" style="background:#C9A84C;color:#1A1A1A">Joyau de Bla</span>
                </div>
                <div class="p-4">
                    <h4 class="font-semibold text-sm mb-1" style="color:#1A1A1A">Sac à main Caramel</h4>
                    <p class="text-xs text-gray-500 mb-3">Cuir véritable · Caramel</p>
                    <p class="font-bold text-sm mb-3" style="color:#C9A84C">60 000 FCFA</p>
                    <div class="flex gap-2">
                        <button class="flex-1 text-white text-xs py-2 rounded-full" style="background:#1A1A1A">
                            + Panier
                        </button>
                        <a href="/boutique/4" class="flex-1 text-center text-xs py-2 rounded-full border-2" style="border-color:#1A1A1A;color:#1A1A1A">
                            Voir
                        </a>
                    </div>
                </div>
            </div>

            <!-- Produit 5 -->
            <div class="product-card rounded-2xl overflow-hidden cursor-pointer bg-white" data-collection="do">
                <div class="h-52 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1575032617751-6ddec2089882?w=400&q=80" alt="Sac DO Noir" class="w-full h-full object-cover">
                    <span class="absolute top-3 left-3 text-xs px-3 py-1 rounded-full font-medium" style="background:#1A1A1A;color:#C9A84C">Collection DO</span>
                </div>
                <div class="p-4">
                    <h4 class="font-semibold text-sm mb-1" style="color:#1A1A1A">Sac Cuir Lézard</h4>
                    <p class="text-xs text-gray-500 mb-3">Cuir lézard · Noir</p>
                    <p class="font-bold text-sm mb-3" style="color:#C9A84C">75 000 FCFA</p>
                    <div class="flex gap-2">
                        <button class="flex-1 text-white text-xs py-2 rounded-full" style="background:#1A1A1A">
                            + Panier
                        </button>
                        <a href="/boutique/5" class="flex-1 text-center text-xs py-2 rounded-full border-2" style="border-color:#1A1A1A;color:#1A1A1A">
                            Voir
                        </a>
                    </div>
                </div>
            </div>

            <!-- Produit 6 -->
            <div class="product-card rounded-2xl overflow-hidden cursor-pointer bg-white" data-collection="capsule">
                <div class="h-52 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1591561954557-26941169b49e?w=400&q=80" alt="Sac Capsule Beige" class="w-full h-full object-cover">
                    <span class="absolute top-3 left-3 text-xs px-3 py-1 rounded-full font-medium text-white" style="background:#C9A84C">Capsule 2026</span>
                </div>
                <div class="p-4">
                    <h4 class="font-semibold text-sm mb-1" style="color:#1A1A1A">Sac Cadeau Premium</h4>
                    <p class="text-xs text-gray-500 mb-3">Cuir véritable · Beige</p>
                    <p class="font-bold text-sm mb-3" style="color:#C9A84C">90 000 FCFA</p>
                    <div class="flex gap-2">
                        <button class="flex-1 text-white text-xs py-2 rounded-full" style="background:#1A1A1A">
                            + Panier
                        </button>
                        <a href="/boutique/6" class="flex-1 text-center text-xs py-2 rounded-full border-2" style="border-color:#1A1A1A;color:#1A1A1A">
                            Voir
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="text-white py-12 px-6" style="background:#1A1A1A">
    <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 text-sm mb-10">
        <div>
            <h3 class="text-lg font-bold mb-4" style="font-family:'Playfair Display',serif;color:#C9A84C">BLAC JOYAUX</h3>
            <p class="text-gray-400 text-xs leading-relaxed">Maroquinerie premium ivoirienne.</p>
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
                <li><a href="/faq" class="hover:text-yellow-400">FAQ</a></li>
                <li><a href="/contact" class="hover:text-yellow-400">Contact</a></li>
                <li><a href="/actualites" class="hover:text-yellow-400">Actualités</a></li>
            </ul>
        </div>
        <div>
            <h4 class="font-semibold mb-4 uppercase text-xs tracking-widest" style="color:#C9A84C">Showroom</h4>
            <p class="text-gray-400 text-xs leading-relaxed">
                Cocody Palmeraie, Abidjan<br>
                Lun–Sam · 09h00 à 18h00<br>
                <span style="color:#C9A84C">+225 07 00 77 55 37</span>
            </p>
        </div>
    </div>
    <div class="border-t border-white/10 pt-6 text-center text-gray-500 text-xs">
        © 2026 Blac Joyaux. Tout droit réservé.
    </div>
</footer>

<!-- WHATSAPP FLOTTANT -->
<a href="https://wa.me/2250700775537" target="_blank"
   class="fixed bottom-6 right-6 bg-green-500 text-white rounded-full w-14 h-14 flex items-center justify-center text-2xl shadow-xl hover:bg-green-600 transition-all z-50">
    💬
</a>

<!-- SCRIPT FILTRES -->
<script>
function filtrer(collection) {
    const produits = document.querySelectorAll('#grille-produits > div');
    const boutons = document.querySelectorAll('.filtre-btn');

    // Reset boutons
    boutons.forEach(btn => {
        btn.style.background = 'transparent';
        btn.style.color = '#1A1A1A';
    });

    // Activer bouton cliqué
    event.target.style.background = '#C9A84C';
    event.target.style.color = '#1A1A1A';

    // Filtrer produits
    produits.forEach(produit => {
        if (collection === 'tous' || produit.dataset.collection === collection) {
            produit.style.display = 'block';
        } else {
            produit.style.display = 'none';
        }
    });
}
</script>

</body>
</html>

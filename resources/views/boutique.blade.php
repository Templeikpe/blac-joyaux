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
<body style="background:#F5ECD7">

<!-- NAVBAR -->
<nav class="bg-white px-6 py-3 sticky top-0 z-50 shadow-sm">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <a href="/" class="font-bold text-xl tracking-widest" style="font-family:'Playfair Display',serif;color:#3D2314">Blac Joyaux</a>
        <div class="hidden md:flex gap-8 text-sm font-medium" style="color:#3D2314">
            <a href="/" class="hover:text-orange-700">Accueil</a>
            <a href="/a-propos" class="hover:text-orange-700">A propos</a>
            <a href="/boutique" class="font-semibold border-b-2" style="border-color:#E8820C;color:#E8820C">Nos Collections</a>
            <a href="/actualites" class="hover:text-orange-700">Actualité</a>
            <a href="/contact" class="hover:text-orange-700">Contact</a>
        </div>
        <div class="flex items-center gap-3">
            <span class="text-lg">🇨🇮</span>
            <a href="#" style="color:#3D2314">👤</a>
        </div>
    </div>
</nav>

<!-- HEADER BOUTIQUE -->
<section class="py-12 px-6 text-center" style="background:#3D2314">
    <p class="text-sm font-medium tracking-widest uppercase mb-2" style="color:#E8820C">Découvrez</p>
    <h1 class="text-4xl font-bold text-white" style="font-family:'Playfair Display',serif">Nos Collections</h1>
    <p class="text-gray-300 mt-3 text-sm">Sacs à main premium fabriqués artisanalement en Côte d'Ivoire</p>
</section>

<!-- FILTRES -->
<section class="py-6 px-6 bg-white border-b border-gray-100">
    <div class="max-w-6xl mx-auto flex flex-wrap gap-3 items-center">
        <span class="text-sm font-semibold" style="color:#3D2314">Filtrer :</span>
        <button onclick="filtrer('tous')" class="filtre-btn px-4 py-2 rounded-full text-sm font-medium border-2 transition-all" style="border-color:#3D2314;background:#3D2314;color:#fff">
            Tous
        </button>
        <button onclick="filtrer('joyau')" class="filtre-btn px-4 py-2 rounded-full text-sm font-medium border-2 transition-all" style="border-color:#3D2314;color:#3D2314">
            Joyau de Bla
        </button>
        <button onclick="filtrer('do')" class="filtre-btn px-4 py-2 rounded-full text-sm font-medium border-2 transition-all" style="border-color:#3D2314;color:#3D2314">
            Collection DO
        </button>
        <button onclick="filtrer('capsule')" class="filtre-btn px-4 py-2 rounded-full text-sm font-medium border-2 transition-all" style="border-color:#3D2314;color:#3D2314">
            Capsule 2026
        </button>
        <select class="ml-auto px-4 py-2 rounded-full text-sm border-2 outline-none cursor-pointer" style="border-color:#3D2314;color:#3D2314">
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
        <p class="text-sm text-gray-500 mb-8">6 produits trouvés</p>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6" id="grille-produits">

            <!-- Produit 1 -->
            <div class="product-card rounded-2xl overflow-hidden cursor-pointer bg-white" data-collection="joyau">
                <div class="h-52 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=400&q=80" alt="Sac Joyau de Bla Noir" class="w-full h-full object-cover">
                    <span class="absolute top-3 left-3 text-xs px-3 py-1 rounded-full font-medium text-white" style="background:#E8820C">Joyau de Bla</span>
                </div>
                <div class="p-4">
                    <h4 class="font-semibold text-sm mb-1" style="color:#3D2314">Sac à main Noir</h4>
                    <p class="text-xs text-gray-500 mb-3">Cuir véritable · Noir</p>
                    <p class="font-bold text-sm mb-3" style="color:#3D2314">50 000 FCFA</p>
                    <div class="flex gap-2">
                        <button class="flex-1 text-white text-xs py-2 rounded" style="background:#3D2314">+ Panier</button>
                        <a href="/fiche-produit" class="flex-1 text-center text-xs py-2 rounded border-2" style="border-color:#3D2314;color:#3D2314">Voir</a>
                    </div>
                </div>
            </div>

            <!-- Produit 2 -->
            <div class="product-card rounded-2xl overflow-hidden cursor-pointer bg-white" data-collection="do">
                <div class="h-52 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1590874103328-eac38a683ce7?w=400&q=80" alt="Sac DO Marron" class="w-full h-full object-cover">
                    <span class="absolute top-3 left-3 text-xs px-3 py-1 rounded-full font-medium text-white" style="background:#3D2314">Collection DO</span>
                </div>
                <div class="p-4">
                    <h4 class="font-semibold text-sm mb-1" style="color:#3D2314">Sac Cuir Marron</h4>
                    <p class="text-xs text-gray-500 mb-3">Cuir véritable · Marron</p>
                    <p class="font-bold text-sm mb-3" style="color:#3D2314">70 000 FCFA</p>
                    <div class="flex gap-2">
                        <button class="flex-1 text-white text-xs py-2 rounded" style="background:#3D2314">+ Panier</button>
                        <a href="/fiche-produit" class="flex-1 text-center text-xs py-2 rounded border-2" style="border-color:#3D2314;color:#3D2314">Voir</a>
                    </div>
                </div>
            </div>

            <!-- Produit 3 -->
            <div class="product-card rounded-2xl overflow-hidden cursor-pointer bg-white" data-collection="capsule">
                <div class="h-52 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=400&q=80" alt="Sac Bureau Capsule" class="w-full h-full object-cover">
                    <span class="absolute top-3 left-3 text-xs px-3 py-1 rounded-full font-medium text-white" style="background:#E8820C">Capsule 2026</span>
                </div>
                <div class="p-4">
                    <h4 class="font-semibold text-sm mb-1" style="color:#3D2314">Sac Bureau Premium</h4>
                    <p class="text-xs text-gray-500 mb-3">Cuir véritable · Noir</p>
                    <p class="font-bold text-sm mb-3" style="color:#3D2314">85 000 FCFA</p>
                    <div class="flex gap-2">
                        <button class="flex-1 text-white text-xs py-2 rounded" style="background:#3D2314">+ Panier</button>
                        <a href="/fiche-produit" class="flex-1 text-center text-xs py-2 rounded border-2" style="border-color:#3D2314;color:#3D2314">Voir</a>
                    </div>
                </div>
            </div>

            <!-- Produit 4 -->
            <div class="product-card rounded-2xl overflow-hidden cursor-pointer bg-white" data-collection="joyau">
                <div class="h-52 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?w=400&q=80" alt="Sac Caramel" class="w-full h-full object-cover">
                    <span class="absolute top-3 left-3 text-xs px-3 py-1 rounded-full font-medium text-white" style="background:#E8820C">Joyau de Bla</span>
                </div>
                <div class="p-4">
                    <h4 class="font-semibold text-sm mb-1" style="color:#3D2314">Sac à main Caramel</h4>
                    <p class="text-xs text-gray-500 mb-3">Cuir véritable · Caramel</p>
                    <p class="font-bold text-sm mb-3" style="color:#3D2314">60 000 FCFA</p>
                    <div class="flex gap-2">
                        <button class="flex-1 text-white text-xs py-2 rounded" style="background:#3D2314">+ Panier</button>
                        <a href="/fiche-produit" class="flex-1 text-center text-xs py-2 rounded border-2" style="border-color:#3D2314;color:#3D2314">Voir</a>
                    </div>
                </div>
            </div>

            <!-- Produit 5 -->
            <div class="product-card rounded-2xl overflow-hidden cursor-pointer bg-white" data-collection="do">
                <div class="h-52 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1575032617751-6ddec2089882?w=400&q=80" alt="Sac DO Noir" class="w-full h-full object-cover">
                    <span class="absolute top-3 left-3 text-xs px-3 py-1 rounded-full font-medium text-white" style="background:#3D2314">Collection DO</span>
                </div>
                <div class="p-4">
                    <h4 class="font-semibold text-sm mb-1" style="color:#3D2314">Sac Cuir Lézard</h4>
                    <p class="text-xs text-gray-500 mb-3">Cuir lézard · Noir</p>
                    <p class="font-bold text-sm mb-3" style="color:#3D2314">75 000 FCFA</p>
                    <div class="flex gap-2">
                        <button class="flex-1 text-white text-xs py-2 rounded" style="background:#3D2314">+ Panier</button>
                        <a href="/fiche-produit" class="flex-1 text-center text-xs py-2 rounded border-2" style="border-color:#3D2314;color:#3D2314">Voir</a>
                    </div>
                </div>
            </div>

            <!-- Produit 6 -->
            <div class="product-card rounded-2xl overflow-hidden cursor-pointer bg-white" data-collection="capsule">
                <div class="h-52 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1591561954557-26941169b49e?w=400&q=80" alt="Sac Capsule Beige" class="w-full h-full object-cover">
                    <span class="absolute top-3 left-3 text-xs px-3 py-1 rounded-full font-medium text-white" style="background:#E8820C">Capsule 2026</span>
                </div>
                <div class="p-4">
                    <h4 class="font-semibold text-sm mb-1" style="color:#3D2314">Sac Cadeau Premium</h4>
                    <p class="text-xs text-gray-500 mb-3">Cuir véritable · Beige</p>
                    <p class="font-bold text-sm mb-3" style="color:#3D2314">90 000 FCFA</p>
                    <div class="flex gap-2">
                        <button class="flex-1 text-white text-xs py-2 rounded" style="background:#3D2314">+ Panier</button>
                        <a href="/fiche-produit" class="flex-1 text-center text-xs py-2 rounded border-2" style="border-color:#3D2314;color:#3D2314">Voir</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="text-white py-12 px-6" style="background:#3D2314">
    <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 text-sm mb-8">
        <div>
            <h3 class="font-bold text-lg mb-4" style="font-family:'Playfair Display',serif">Blac Joyaux</h3>
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
                <li><a href="/boutique" class="hover:text-orange-400">Joyau de Bla</a></li>
                <li><a href="/boutique" class="hover:text-orange-400">Collection DO</a></li>
                <li><a href="/capsule" class="hover:text-orange-400">Capsule 2026</a></li>
            </ul>
        </div>
        <div>
            <h4 class="font-semibold mb-4 uppercase text-xs tracking-widest" style="color:#E8820C">Support</h4>
            <ul class="text-gray-300 space-y-2 text-xs">
                <li><a href="/contact" class="hover:text-orange-400">Contact</a></li>
                <li><a href="/actualites" class="hover:text-orange-400">Actualités</a></li>
                <li><a href="/faq" class="hover:text-orange-400">FAQ</a></li>
            </ul>
        </div>
        <div>
            <h4 class="font-semibold mb-4 uppercase text-xs tracking-widest" style="color:#E8820C">Showroom</h4>
            <p class="text-gray-300 text-xs leading-relaxed">
                Cocody Palmeraie, Abidjan<br>
                Lun–Sam · 09h00 à 18h00<br>
                <span style="color:#E8820C">+225 07 00 77 55 37</span>
            </p>
        </div>
    </div>
    <div class="border-t border-white/10 pt-6 text-center text-gray-400 text-xs">
        © 2026 Blac Joyaux. Tout droit réservé.
    </div>
</footer>

<!-- WHATSAPP FLOTTANT -->
<a href="https://wa.me/2250700775537" target="_blank"
   class="fixed bottom-6 right-6 bg-green-500 text-white rounded-full w-14 h-14 flex items-center justify-center text-2xl shadow-xl hover:bg-green-600 transition-all z-50">
    💬
</a>

<script>
function filtrer(collection) {
    const produits = document.querySelectorAll('#grille-produits > div');
    const boutons = document.querySelectorAll('.filtre-btn');
    boutons.forEach(btn => {
        btn.style.background = 'transparent';
        btn.style.color = '#3D2314';
    });
    event.target.style.background = '#3D2314';
    event.target.style.color = '#fff';
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

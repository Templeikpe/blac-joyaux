<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sac à main Doré — Blac Joyaux</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background:#F5ECD7; }
        .thumb { transition: all 0.2s ease; cursor: pointer; }
        .thumb:hover, .thumb.active { border-color: #3D2314 !important; }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="bg-white px-6 py-3 sticky top-0 z-50 shadow-sm">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <a href="/" class="font-bold text-xl tracking-widest" style="font-family:'Playfair Display',serif;color:#3D2314">Blac Joyaux</a>
        <div class="hidden md:flex gap-8 text-sm font-medium" style="color:#3D2314">
            <a href="/" class="hover:text-orange-700">Accueil</a>
            <a href="/a-propos" class="hover:text-orange-700">A propos</a>
            <a href="/boutique" class="hover:text-orange-700">Nos Collections</a>
            <a href="/actualites" class="hover:text-orange-700">Actualité</a>
            <a href="/contact" class="hover:text-orange-700">Contact</a>
        </div>
        <div class="flex items-center gap-3">
            <span class="text-lg">🇨🇮</span>
            <a href="#" style="color:#3D2314">👤</a>
        </div>
    </div>
</nav>

<!-- FIL D'ARIANE -->
<div class="max-w-5xl mx-auto px-6 py-3 text-xs text-gray-500">
    <a href="/">Accueil</a> › <a href="/boutique">Boutique</a> › <a href="/boutique">Joyau de Bla</a> › <span style="color:#3D2314">Sac à main – Nouvelle version – Doré</span>
</div>

<!-- FICHE PRODUIT -->
<section class="py-6 px-6">
    <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10">

        <!-- GALERIE -->
        <div>
            <div class="rounded-xl overflow-hidden mb-3 bg-white">
                <img id="main-img" src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=800&q=80"
                     alt="Sac à main Doré" class="w-full h-80 object-cover">
            </div>
            <div class="grid grid-cols-4 gap-2">
                <img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=200&q=80"
                     class="thumb active rounded-lg h-16 w-full object-cover border-2"
                     style="border-color:#3D2314"
                     onclick="changeImg(this,'https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=800&q=80')">
                <img src="https://images.unsplash.com/photo-1590874103328-eac38a683ce7?w=200&q=80"
                     class="thumb rounded-lg h-16 w-full object-cover border-2 border-gray-200"
                     onclick="changeImg(this,'https://images.unsplash.com/photo-1590874103328-eac38a683ce7?w=800&q=80')">
                <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=200&q=80"
                     class="thumb rounded-lg h-16 w-full object-cover border-2 border-gray-200"
                     onclick="changeImg(this,'https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=800&q=80')">
                <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?w=200&q=80"
                     class="thumb rounded-lg h-16 w-full object-cover border-2 border-gray-200"
                     onclick="changeImg(this,'https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?w=800&q=80')">
            </div>
        </div>

        <!-- INFOS -->
        <div>
            <h1 class="text-2xl font-bold mb-1" style="font-family:'Playfair Display',serif;color:#3D2314">
                Sac à main – Nouvelle version – Doré
            </h1>
            <p class="text-2xl font-bold mb-4" style="color:#3D2314">50 000 CFA</p>

            <!-- Quantité + panier -->
            <div class="flex items-center gap-4 mb-4">
                <div class="flex items-center border rounded overflow-hidden">
                    <button onclick="changeQty(-1)" class="px-3 py-2 text-sm font-bold hover:bg-gray-100" style="color:#3D2314">−</button>
                    <span id="qty" class="px-4 py-2 text-sm font-semibold border-x">1</span>
                    <button onclick="changeQty(1)" class="px-3 py-2 text-sm font-bold hover:bg-gray-100" style="color:#3D2314">+</button>
                </div>
                <a href="/panier" class="flex-1 text-center text-white font-semibold py-3 rounded text-sm" style="background:#3D2314">
                    Ajouter au panier
                </a>
            </div>

            <!-- Couleurs -->
            <div class="flex gap-3 mb-6">
                <button class="w-7 h-7 rounded-full border-2 border-gray-800" style="background:#1A1A1A" title="Noir"></button>
                <button class="w-7 h-7 rounded-full border-2 border-gray-300" style="background:#8B4513" title="Marron"></button>
                <button class="w-7 h-7 rounded-full border-2 border-gray-300" style="background:#DC143C" title="Rouge"></button>
                <button class="w-7 h-7 rounded-full border-2 border-gray-300" style="background:#FFB6C1" title="Rose"></button>
            </div>

            <!-- Description -->
            <div class="mb-4">
                <p class="font-semibold text-sm mb-2" style="color:#3D2314">Description</p>
                <p class="text-xs text-gray-600 leading-relaxed">
                    Découvrez notre nouvelle collection de sacs Joyaux de Bla version 3.0, coupe trapèze, édition 2026.
                </p>
            </div>

            <!-- Fiche technique -->
            <div class="mb-4 text-xs text-gray-600 space-y-2">
                <p><span class="font-semibold" style="color:#3D2314">Design (conception) :</span> Conçu pour les femmes qui ont des accessoires de vie, ces sacs s'adaptent selon l'environnement. Conçus pour les personnes en quête de maroquinerie de maroquinerie de qualité, ces sacs à main vous permettent de trouver un sac à main unique.</p>
                <p><span class="font-semibold" style="color:#3D2314">Design intérieur :</span> Ce sac est muni d'une fermeture à glissière, de poches adaptatives intérieures, ces poches peuvent s'adapter à votre téléphone ainsi qu'à vos besoins courants.</p>
                <p><span class="font-semibold" style="color:#3D2314">Dimensions :</span> 25 cm × 30 cm × 13 cm</p>
                <p><span class="font-semibold" style="color:#3D2314">Rangement spacieux :</span> Doté d'un compartiment principal spacieux, ce sac peut accueillir jusqu'à 14 formats de votre vie quotidienne. Il peut s'adapter à votre matériel et à vos effets personnels.</p>
                <p><span class="font-semibold" style="color:#3D2314">Confort de port :</span> L'anse soigneuse est une sangle en cuir avec un rembourrage doux, ce qui vous permet de porter votre sac à main avec aisance. De plus, son poids léger vous permettra d'apprécier une meilleure expérience de confort.</p>
            </div>

            <!-- Matières & Fabrication -->
            <div class="rounded-xl p-4 text-xs" style="background:#fff">
                <p class="font-semibold mb-2" style="color:#3D2314">Matières & Fabrication</p>
                <ul class="text-gray-500 space-y-1">
                    <li>• Extérieur : cuir véritable de qualité supérieure et son entretien est garantie.</li>
                    <li>• Intérieur : tissu satiné de qualité supérieure.</li>
                    <li>• Quincaillerie dorée de qualité.</li>
                    <li>• La qualité de ce sac à main nous garantit la durabilité à sa durabilité à votre style.</li>
                </ul>
            </div>

            <!-- WhatsApp -->
            <a href="https://wa.me/2250700775537?text=Bonjour, je souhaite commander le Sac à main Nouvelle version Doré à 50 000 CFA"
               target="_blank"
               class="mt-4 block text-center text-white font-semibold py-3 rounded text-sm" style="background:#25D366">
                💬 Commander via WhatsApp
            </a>
        </div>
    </div>
</section>

<!-- AVIS CLIENTS -->
<section class="py-10 px-6 bg-white">
    <div class="max-w-5xl mx-auto">
        <h2 class="text-lg font-semibold text-center mb-8" style="color:#3D2314">Quelques avis clients ❤️</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-4 rounded-xl" style="background:#F5ECD7">
                <p class="text-yellow-500 text-sm mb-2">★★★★★</p>
                <p class="text-xs text-gray-600 italic leading-relaxed">"Ce sac est vraiment de très bonne qualité. La livraison était rapide et le sac est exactement comme sur les photos."</p>
                <p class="text-xs font-semibold mt-3" style="color:#3D2314">Fatoumata K.</p>
            </div>
            <div class="p-4 rounded-xl" style="background:#F5ECD7">
                <p class="text-yellow-500 text-sm mb-2">★★★★★</p>
                <p class="text-xs text-gray-600 italic leading-relaxed">"J'adore ce sac ! Il est spacieux, élégant et très solide. Je recommande vivement Blac Joyaux !"</p>
                <p class="text-xs font-semibold mt-3" style="color:#3D2314">Madam G.</p>
            </div>
            <div class="p-4 rounded-xl" style="background:#F5ECD7">
                <p class="text-yellow-500 text-sm mb-2">★★★★★</p>
                <p class="text-xs text-gray-600 italic leading-relaxed">"Superbe cadeau pour ma mère. Elle était très contente. Le sac est magnifique et bien fini."</p>
                <p class="text-xs font-semibold mt-3" style="color:#3D2314">Adjoua K.</p>
            </div>
        </div>
    </div>
</section>

<!-- PRODUITS SIMILAIRES -->
<section class="py-10 px-6" style="background:#F5ECD7">
    <div class="max-w-5xl mx-auto">
        <h2 class="text-lg font-semibold mb-6" style="color:#3D2314">Vous pourriez aimer aussi...</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl overflow-hidden shadow-sm">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=400&q=80" alt="Sac" class="w-full h-40 object-cover">
                    <span class="absolute top-2 left-2 text-xs px-2 py-1 rounded text-white" style="background:#E8820C">Nouveau</span>
                </div>
                <div class="p-3">
                    <p class="text-xs text-gray-400 mb-1">Sac à main – Nouvelle version</p>
                    <p class="text-xs font-semibold mb-1" style="color:#3D2314">Joyau de Bla</p>
                    <p class="font-bold text-sm mb-2" style="color:#3D2314">50 000 CFA</p>
                    <button class="w-full text-white text-xs py-2 rounded" style="background:#3D2314">En savoir plus</button>
                </div>
            </div>
            <div class="bg-white rounded-xl overflow-hidden shadow-sm">
                <img src="https://images.unsplash.com/photo-1590874103328-eac38a683ce7?w=400&q=80" alt="Sac" class="w-full h-40 object-cover">
                <div class="p-3">
                    <p class="text-xs text-gray-400 mb-1">Sac à main – Nouvelle version</p>
                    <p class="text-xs font-semibold mb-1" style="color:#3D2314">Joyau de Bla</p>
                    <p class="font-bold text-sm mb-2" style="color:#3D2314">50 000 CFA</p>
                    <button class="w-full text-white text-xs py-2 rounded" style="background:#3D2314">En savoir plus</button>
                </div>
            </div>
            <div class="bg-white rounded-xl overflow-hidden shadow-sm">
                <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=400&q=80" alt="Sac" class="w-full h-40 object-cover">
                <div class="p-3">
                    <p class="text-xs text-gray-400 mb-1">Sac à main – Disco Littoral</p>
                    <p class="text-xs font-semibold mb-1" style="color:#3D2314">Joyau de Bla</p>
                    <p class="font-bold text-sm mb-2" style="color:#3D2314">70 000 CFA</p>
                    <button class="w-full text-white text-xs py-2 rounded" style="background:#3D2314">En savoir plus</button>
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
                <li><a href="/boutique" class="hover:text-orange-400">Dominique</a></li>
                <li><a href="/boutique" class="hover:text-orange-400">Ouattara</a></li>
                <li><a href="/boutique" class="hover:text-orange-400">Joyaux de Bla</a></li>
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
            <ul class="text-gray-300 space-y-2 text-xs">
                <li><a href="#" class="hover:text-orange-400">📸 Instagram</a></li>
                <li><a href="#" class="hover:text-orange-400">🎵 TikTok</a></li>
                <li><a href="#" class="hover:text-orange-400">📘 Facebook</a></li>
                <li><a href="#" class="hover:text-orange-400">💬 WhatsApp</a></li>
            </ul>
            <div class="mt-4 text-xs text-gray-300">
                <p style="color:#E8820C">Showroom Blac Joyaux</p>
                <p>Cocody Palmeraie, Abidjan</p>
                <p>Lun–Sam · 09h00 à 18h00</p>
                <p style="color:#E8820C">+225 07 00 77 55 37</p>
            </div>
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
function changeImg(thumb, src) {
    document.getElementById('main-img').src = src;
    document.querySelectorAll('.thumb').forEach(t => t.style.borderColor = '#e5e7eb');
    thumb.style.borderColor = '#3D2314';
}
function changeQty(val) {
    let qty = parseInt(document.getElementById('qty').textContent);
    qty = Math.max(1, qty + val);
    document.getElementById('qty').textContent = qty;
}
</script>

</body>
</html>

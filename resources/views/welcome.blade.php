<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blac Joyaux — Maroquinerie Premium Made in CI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
       body {
    font-family: 'Montserrat', sans-serif;
}
        .hero-bg {
            background-image: linear-gradient(rgba(61,35,20,0.65), rgba(61,35,20,0.65)),
                  url('/img/heroaccueil.jpeg');
            background-size: cover;
            background-position: center;
            min-height: 90vh;
        }
        .product-card { transition: all 0.3s ease; }
        .product-card:hover { transform: translateY(-4px); }
        details summary::-webkit-details-marker { display: none; }
        details summary span { transition: transform 0.3s ease; display: inline-block; }
        details[open] summary span { transform: rotate(45deg); }
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
            <a href="/boutique" class="hover:text-orange-700">Nos Collections</a>
            <a href="/actualites" class="hover:text-orange-700">Actualité</a>
            <a href="/contact" class="hover:text-orange-700">Contact</a>
        </div>
        <div class="flex items-center gap-4 text-lg" style="color:#3D2314">
            <span class="text-lg">🇨🇮</span>
            <a href="/recherche" title="Recherche"><i class="fas fa-search"></i></a>
            <a href="/panier" title="Panier"><i class="fas fa-shopping-cart"></i></a>
            @if(auth('client')->check())
                <a href="/mon-compte" title="Mon compte"><i class="fas fa-user"></i></a>
            @else
                <a href="/connexion" title="Connexion"><i class="fas fa-user"></i></a>
            @endif
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="hero-bg flex flex-col justify-center items-center text-center px-10 py-20">
    <div class="max-w-xl">
        <p class="text-white text-3xl md:text-5xl font-medium mb-4">
            Own the future
        </p>
        <p class="text-4xl md:text-6xl font-bold" style="color:#E8820C">
            l'avenir en main
        </p>
        <a href="/boutique"
   class="inline-block mt-9 border-2 border-white text-white font-bold px-8 py-3 rounded-full transition-all duration-300 hover:bg-white hover:text-black hover:scale-105">
    Découvrir la boutique
</a>
    </div>
</section>

<!-- GROSSE BARRE DE RECHERCHE -->
<section class="px-6 py-8" style="background:#F5ECD7">
    <form method="GET" action="{{ route('recherche') }}" class="max-w-2xl mx-auto">
        <div class="relative">
            <i class="fas fa-search absolute left-6 top-1/2 -translate-y-1/2 text-gray-400 text-xl"></i>
            <input type="text" name="q"
                   placeholder="Rechercher un sac, une collection, une page..."
                   class="w-full pl-14 pr-6 py-5 rounded-2xl border-2 border-gray-300 text-lg outline-none focus:border-[#3D2314] bg-white shadow-sm">
        </div>
    </form>
</section>

<?php
// ============================================================
// TOUS LES PRODUITS DU SITE — regroupés ici pour la page d'accueil
// Chaque carte renvoie vers /fiche-produit avec ses infos complètes
// ============================================================
$tousLesProduits = [
    // --- JOYAUX DE BLA ---
    ['nom' => 'Noir avec bijoux doré', 'prix' => 50000, 'img' => asset('img/Sac-noir.jpg'), 'collection' => 'Joyau de Bla', 'description' => "Sac à main élégant en noir avec bijoux dorés. Coloration: Noir profond. Un choix sophistiqué de la collection Joyaux de Bla."],
    ['nom' => 'Bleu avec bijoux doré', 'prix' => 50000, 'img' => asset('img/Sac1-blueu.png'), 'collection' => 'Joyau de Bla', 'description' => "Sac à main en bleu vibrant avec bijoux dorés. Coloration: Bleu éclatant. Un design moderne et féminin de la collection Joyaux de Bla."],
    ['nom' => 'Doré', 'prix' => 50000, 'img' => asset('img/Sac-dore.jpg'), 'collection' => 'Joyau de Bla', 'description' => "Sac à main en doré luxueux avec bijoux assortis. Coloration: Doré brillant. L'éclat parfait pour vos occasions spéciales - collection Joyaux de Bla."],
    ['nom' => 'Rouge avec bijoux doré', 'prix' => 50000, 'img' => asset('img/Sac-rouge.png'), 'collection' => 'Joyau de Bla', 'description' => "Sac à main rouge éclatant avec bijoux dorés. Coloration: Rouge passion. Ravissant et intemporel, parfait pour toute occasion - collection Joyaux de Bla."],
    ['nom' => 'Bleu ciel avec bijoux doré', 'prix' => 70000, 'img' => asset('img/Sac-blanc.png'), 'collection' => 'Joyau de Bla', 'description' => "Sac à main en bleu ciel clair avec bijoux dorés. Coloration: Bleu ciel tendre. Une teinte douce et élégante - collection Joyaux de Bla premium."],
    ['nom' => 'Rose avec bijoux doré', 'prix' => 50000, 'img' => asset('img/Sac-violet.jpg'), 'collection' => 'Joyau de Bla', 'description' => "Sac à main en rose délicat avec bijoux dorés. Coloration: Rose tendre. Féminin et sophistiqué pour les femmes modernes - collection Joyaux de Bla."],
    ['nom' => 'Croco jaune', 'prix' => 70000, 'img' => asset('img/Sac-jaune.jpg'), 'collection' => 'Joyau de Bla', 'description' => "Sac à main style croco en jaune éclatant. Coloration: Jaune vif. Un accent coloré et audacieux - collection Joyaux de Bla."],
    ['nom' => 'Croco Bleu Ciel petit format', 'prix' => 70000, 'img' => asset('img/Sac.jpg'), 'collection' => 'Joyau de Bla', 'description' => "Sac à main format compact style croco en bleu ciel. Coloration: Bleu ciel. Parfait pour celles qui préfèrent la discrétion - collection Joyaux de Bla."],
    ['nom' => 'Imprimé peau de serpent', 'prix' => 70000, 'img' => asset('img/Sac-marroncasse.jpg'), 'collection' => 'Joyau de Bla', 'description' => "Sac à main avec motif peau de serpent en marron cassé. Coloration: Marron chaud. Sophistiqué et tendance - collection Joyaux de Bla."],
     ['nom' => 'Sika', 'prix' => 50000, 'img' => asset('img/poupee.jpeg'), 'collection' => 'Joyau de Bla', 'description' => "Découvrez le sac Sika, une pièce au design raffiné pensée pour sublimer chaque tenue. Son cuir grainé, ses finitions dorées et son foulard signature en font un accessoire élégant, pratique et intemporel. Coloration: Bleu nuit. Collection Joyaux de Bla."],
    ['nom' => 'Moayé', 'prix' => 70000, 'img' => asset('img/sac-rouge-bordeau.jpeg'), 'collection' => 'Joyau de Bla', 'description' => "Découvrez le sac Moayé, une pièce au design élégant conçue pour allier caractère et fonctionnalité. Son cuir souple, sa finition raffinée et son grand format en font un compagnon idéal pour le quotidien comme pour les occasions spéciales.
"],
    ['nom' => 'Kloleh', 'prix' => 40000, 'img' => asset('img/sac-rougeboerdeau.jpeg'), 'collection' => 'Joyau de Bla', 'description' => "Découvrez le portefeuille bandoulière Ashanti, un accessoire 2-en-1 qui allie élégance et praticité. Compact, il protège vos essentiels tout en offrant une organisation optimale pour vous accompagner au quotidien."],

    // --- COLLECTION DO ---
    ['nom' => 'Sac Cuir Caramel', 'prix' => 60000, 'img' => asset('img/Sac-cui-marron.jpg'), 'collection' => 'Collection DO', 'description' => "Sac à main en cuir caramel chaleureux avec finitions premium. Coloration: Marron caramel. Combinant durabilité et élégance pour la collection DO."],
    ['nom' => 'Sac Bureau Gold', 'prix' => 85000, 'img' => asset('img/Sacnoirpetit.jpg'), 'collection' => 'Collection DO', 'description' => "Sac à main de luxe en doré brillant, parfait pour le bureau. Coloration: Doré lumineux. Un accessoire professionnel et élégant de la collection DO."],
    ['nom' => 'Croco Lézard', 'prix' => 70000, 'img' => asset('img/Sac-marron.jpg'), 'collection' => 'Collection DO', 'description' => "Sac à main façon croco lézard, alliant texture raffinée et élégance intemporelle. Collection DO."],
];
?>

<!-- TOUTES NOS CRÉATIONS -->
<section class="py-12 px-6" style="background:#F5ECD7">
    <div class="max-w-6xl mx-auto">
        <h1 class="text-xl font-semibold mb-2" style="color:#3D2314">Des créations inspirées de l'héritage ivoirien pour accompagner votre quotidien.</h1>
        <p class="text-sm text-gray-500 mb-6">Cliquez sur une photo pour voir tous les détails, le prix, et commander.</p>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
            @foreach($tousLesProduits as $p)
                <a href="/fiche-produit?nom={{ urlencode($p['nom']) }}&prix={{ $p['prix'] }}&img={{ urlencode($p['img']) }}&collection={{ urlencode($p['collection']) }}&description={{ urlencode($p['description']) }}"
                   class="product-card bg-white rounded-xl overflow-hidden shadow-sm block">
                    <img src="{{ $p['img'] }}" alt="{{ $p['nom'] }}" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <p class="text-2xs mb-1" style="color:#E8820C">{{ $p['collection'] }}</p>
                        <p class="font-semibold text-sm mb-1" style="color:#3D2314">{{ $p['nom'] }}</p>
                        <p class="font-bold text-sm mb-3" style="color:#3D2314">{{ number_format($p['prix'], 0, ',', '.') }} CFA</p>
                        <span class="w-full block text-center text-white text-xs py-2 rounded font-medium" style="background:#3D2314">Voir plus</span>
                    </div>
                </a>
            @endforeach
        </div>

        <!-- Avis clients -->
        <div class="mt-10">
            <h3 class="font-semibold text-center mb-6" style="color:#3D2314">Quelques avis clients</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-white rounded-xl p-4 shadow-sm">
                    <p class="text-yellow-500 text-sm mb-2">★★★★★</p>
                    <p class="text-xs text-gray-600 italic">"Très beau sac, qualité exceptionnelle. Je recommande vivement !"</p>
                    <p class="text-xs font-semibold mt-2" style="color:#3D2314">Adjoa K.</p>
                </div>
                <div class="bg-white rounded-xl p-4 shadow-sm">
                    <p class="text-yellow-500 text-sm mb-2">★★★★★</p>
                    <p class="text-xs text-gray-600 italic">"Livraison rapide et sac magnifique. Made in CI, trop fier !"</p>
                    <p class="text-xs font-semibold mt-2" style="color:#3D2314">Mariam T.</p>
                </div>
                <div class="bg-white rounded-xl p-4 shadow-sm">
                    <p class="text-yellow-500 text-sm mb-2">★★★★☆</p>
                    <p class="text-xs text-gray-600 italic">"Superbe cadeau pour ma sœur. Elle était ravie !"</p>
                    <p class="text-xs font-semibold mt-2" style="color:#3D2314">Kouassi A.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- NOS DEUX COLLECTIONS -->
<section class="py-12 px-12 bg-white">
    <div class="max-w-3xl mx-auto">
        <h2 class="text-xl font-semibold text-center mb-8" style="color:#3D2314">Nos deux collections de sacs made in Côte d'Ivoire</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="relative overflow-hidden rounded-xl">
                <img src="{{ asset('img/collection-joyaubla.jpg') }}" alt="Sac">
                <div class="absolute inset-0 flex flex-col justify-end p-6" style="background:linear-gradient(to top, rgba(61,35,20,0.85), transparent)">
                    <p class="text-white font-bold text-lg" style="font-family:'Playfair Display',serif">COLLECTION "DO"</p>
                    <a href="/collection/do" class="text-xs mt-2 hover:underline" style="color:#E8820C">Voir la collection →</a>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-xl">
                <img src="{{ asset('img/collection-do.jpg') }}" alt="Sac">
                <div class="absolute inset-0 flex flex-col justify-end p-6" style="background:linear-gradient(to top, rgba(61,35,20,0.85), transparent)">
                    <p class="text-white font-bold text-lg" style="font-family:'Playfair Display',serif">COLLECTION "JOYAUX DE BLA"</p>
                    <a href="/collection/joyau-de-bla" class="text-xs mt-2 hover:underline" style="color:#E8820C">Voir la collection →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="py-12 px-6" style="background:#F5ECD7">
    <div class="max-w-3xl mx-auto">
        <h2 class="text-2xl font-bold text-center mb-2" style="color:#3D2314;font-family:'Playfair Display',serif">FAQ's</h2>
        <p class="text-center text-sm text-gray-500 mb-8">Quelques unes des questions les plus fréquentes</p>
        <div class="space-y-3">

            <details class="rounded-xl px-5 py-4 cursor-pointer text-white" style="background:#B08968">
                <summary class="font-semibold text-sm flex justify-between items-center">
                    Pourquoi faire confiance à blac joyaux ?
                    <span>+</span>
                </summary>
                <p class="text-xs mt-3 leading-relaxed text-white/90">
                    Parce que chaque sac est conçu avec soin, inspiré du patrimoine ivoirien et fabriqué avec des matériaux de qualité pour vous accompagner durablement..
                </p>
            </details>

            <details class="rounded-xl px-5 py-4 cursor-pointer text-white" style="background:#B08968">
                <summary class="font-semibold text-sm flex justify-between items-center">
                    Les sacs sont-ils fabriqués en Côte d'Ivoire ?
                    <span>+</span>
                </summary>
                <p class="text-xs mt-3 leading-relaxed text-white/90">
                    Oui, Blac Joyaux valorise le savoir-faire local à travers des créations conçues et fabriquées avec le plus grand soin.
                </p>
            </details>

            <details class="rounded-xl px-5 py-4 cursor-pointer text-white" style="background:#B08968">
                <summary class="font-semibold text-sm flex justify-between items-center">
                    Pourquoi le sac Joyau de Bla est-il particulier ?
                    <span>+</span>
                </summary>
                <p class="text-xs mt-3 leading-relaxed text-white/90">
                    Chaque création associe design contemporain, savoir-faire local et inspiration culturelle ivoirienne pour offrir un accessoire à la fois élégant et porteur de sens.
                </p>
            </details>

            <details class="rounded-xl px-5 py-4 cursor-pointer text-white" style="background:#B08968">
                <summary class="font-semibold text-sm flex justify-between items-center">
                    Pourquoi offrir un sac Blac Joyaux ?
                    <span>+</span>
                </summary>
                <p class="text-xs mt-3 leading-relaxed text-white/90">
                    Offrir un sac Blac Joyaux, c'est offrir bien plus qu'un accessoire : c'est offrir une histoire, une émotion et un héritage culturel.
                </p>
            </details>

            <details class="rounded-xl px-5 py-4 cursor-pointer text-white" style="background:#B08968">
                <summary class="font-semibold text-sm flex justify-between items-center">
                    Comment passer commande ?
                    <span>+</span>
                </summary>
                <p class="text-xs mt-3 leading-relaxed text-white/90">
                    Vous pouvez commander directement sur le site ou contacter notre équipe via WhatsApp pour être accompagné dans votre achat.
                </p>
            </details>

            <details class="rounded-xl px-5 py-4 cursor-pointer text-white" style="background:#B08968">
                <summary class="font-semibold text-sm flex justify-between items-center">
                    Comment choisir le sac qui me convient ?
                    <span>+</span>
                </summary>
                <p class="text-xs mt-3 leading-relaxed text-white/90">
                    Chaque fiche produit présente les usages recommandés, les dimensions, la capacité et les occasions pour lesquelles le modèle a été pensé.
                </p>
            </details>

        </div>
        <div class="text-center mt-8">
            <a href="/commande" class="text-white font-semibold px-8 py-3 rounded text-sm" style="background:#3D2314">
                Commander maintenant
            </a>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="text-white py-12 px-6" style="background:#3D2314">
    <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 text-sm mb-8">
        <div>
            <h3 class="font-bold text-lg mb-4" style="font-family:'Playfair Display',serif">Blac Joyaux</h3>
            <p class="text-gray-300 text-xs leading-relaxed mb-4">
                Nous sommes une marque ivoirienne de maroquinerie qui raconte une histoire, celle de la Côte d'Ivoire, de sa résilience, de ses traditions africaines.
            </p>
            <p class="text-xs text-gray-400">Inscrivez-vous à la newsletter</p>
            <div class="flex mt-2">
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
            <ul class="text-gray-300 space-y-2 text-xs">
                <li><a href="https://www.instagram.com/blacjoyaux?igsh=Z3R6cXFtNDV6a2Ju" class="hover:text-orange-400">📸 Instagram</a></li>
                <li><a href="https://www.tiktok.com/@blac.joyaux?_r=1&_t=ZS-97dsi1WGBZ1" class="hover:text-orange-400">🎵 TikTok</a></li>
                <li><a href="https://www.facebook.com/share/195mr1hFGy/" class="hover:text-orange-400">📘 Facebook</a></li>
                <li><a href="https://wa.me/2250708771557" class="hover:text-orange-400">💬 WhatsApp</a></li>
            </ul>
            <div class="mt-4">
                <p class="text-xs text-gray-400 mb-1">Showroom Blac Joyaux</p>
                <p class="text-xs text-gray-300">Côte d'Ivoire · Commune de Cocody<br>Rond-point de la Riviera Palmeraie</p>
                <p class="text-xs text-gray-300 mt-2">Horaire d'ouverture<br>Lundi au samedi, de 09h00 à 18h00</p>
                <p class="text-xs mt-2" style="color:#E8820C">Contact / SAV<br>+225 0708771557 · +225 0564542215</p>
            </div>
        </div>
    </div>
    <div class="border-t border-white/10 pt-6 text-center text-gray-400 text-xs">
        © 2026 Blac Joyaux. Tout droit réservé. &nbsp;|&nbsp;
        <a href="/legal" class="hover:text-orange-400">Confidentialité</a> &nbsp;|&nbsp;
        <a href="/legal" class="hover:text-orange-400">Conditions générales</a>
    </div>
</footer>

<!-- WHATSAPP FLOTTANT -->
<a href="https://wa.me/2250708771557" target="_blank"
   class="fixed bottom-6 right-6 bg-green-500 text-white rounded-full w-14 h-14 flex items-center justify-center text-2xl shadow-xl hover:bg-green-600 transition-all z-50">
    💬
</a>

</body>
</html>

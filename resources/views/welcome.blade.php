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
                        'or': '#E8820C',
                        'marron': '#3D2314',
                        'marron-light': '#5C3420',
                        'beige': '#F5ECD7',
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .hero-bg {
            background-image: linear-gradient(rgba(61,35,20,0.55), rgba(61,35,20,0.55)),
                              url('https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=1400&q=80');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
        }
        .product-card { transition: all 0.3s ease; }
        .product-card:hover { transform: translateY(-4px); }
        details summary::-webkit-details-marker { display: none; }
    </style>
</head>
<body style="background:#F5ECD7">

<!-- NAVBAR -->
<nav class="bg-white px-6 py-3 sticky top-0 z-50 shadow-sm">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <a href="/" class="font-bold text-xl tracking-widest" style="font-family:'Playfair Display',serif;color:#3D2314">
            Blac Joyaux
        </a>
        <div class="hidden md:flex gap-8 text-sm font-medium" style="color:#3D2314">
            <a href="/" class="hover:text-orange-600">Accueil</a>
            <a href="/a-propos" class="hover:text-orange-600">A propos</a>
            <a href="/boutique" class="hover:text-orange-600">Nos Collections</a>
            <a href="/actualites" class="hover:text-orange-600">Actualité</a>
            <a href="/contact" class="hover:text-orange-600">Contact</a>
        </div>
        <div class="flex items-center gap-3">
            <span class="text-lg">🇫🇷</span>
            <a href="#" class="text-xl" style="color:#3D2314">👤</a>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="hero-bg flex flex-col justify-center items-start px-10 py-20">
    <div class="max-w-md">
        <p class="text-white text-lg font-medium mb-2">Votre maroquinerie premium 100%</p>
        <p class="text-2xl font-bold mb-8" style="color:#E8820C">Ivoirienne</p>
        <a href="/boutique" class="border-2 border-white text-white font-bold px-8 py-3 tracking-widest hover:bg-white hover:text-marron transition-all">
            DÉCOUVRIR
        </a>
    </div>
</section>

<!-- CRÉATIONS -->
<section class="py-12 px-6" style="background:#F5ECD7">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-xl font-semibold mb-2" style="color:#3D2314">Des créations inspirées de l'héritage ivoirien pour accompagner votre quotidien.</h2>
        <a href="/boutique" class="text-sm hover:underline" style="color:#E8820C">Voir plus →</a>

        <!-- Produits -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-6 mt-8">
            <div class="product-card bg-white rounded-xl overflow-hidden shadow-sm">
                <img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=400&q=80" alt="Sac" class="w-full h-48 object-cover">
                <div class="p-4">
                    <p class="text-xs mb-1" style="color:#E8820C">Joyau de Bla</p>
                    <p class="font-semibold text-sm mb-1" style="color:#3D2314">Sac à main Noir</p>
                    <p class="font-bold text-sm mb-3" style="color:#3D2314">50 000 CFA</p>
                    <button class="w-full text-white text-xs py-2 rounded font-medium" style="background:#3D2314">En savoir plus</button>
                </div>
            </div>
            <div class="product-card bg-white rounded-xl overflow-hidden shadow-sm">
                <img src="https://images.unsplash.com/photo-1590874103328-eac38a683ce7?w=400&q=80" alt="Sac" class="w-full h-48 object-cover">
                <div class="p-4">
                    <p class="text-xs mb-1" style="color:#E8820C">Joyau de Bla</p>
                    <p class="font-semibold text-sm mb-1" style="color:#3D2314">Sac Cuir Caramel</p>
                    <p class="font-bold text-sm mb-3" style="color:#3D2314">60 000 CFA</p>
                    <button class="w-full text-white text-xs py-2 rounded font-medium" style="background:#3D2314">En savoir plus</button>
                </div>
            </div>
            <div class="product-card bg-white rounded-xl overflow-hidden shadow-sm">
                <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=400&q=80" alt="Sac" class="w-full h-48 object-cover">
                <div class="p-4">
                    <p class="text-xs mb-1" style="color:#E8820C">Collection DO</p>
                    <p class="font-semibold text-sm mb-1" style="color:#3D2314">Sac Bureau Gold</p>
                    <p class="font-bold text-sm mb-3" style="color:#3D2314">85 000 CFA</p>
                    <button class="w-full text-white text-xs py-2 rounded font-medium" style="background:#3D2314">En savoir plus</button>
                </div>
            </div>
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

        <!-- Ce que nos clients aiment -->
        <div class="mt-10">
            <h3 class="font-semibold text-center mb-6" style="color:#3D2314">Ce que nos clients aiment...</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                <div class="product-card bg-white rounded-xl overflow-hidden shadow-sm">
                    <img src="https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?w=400&q=80" alt="Sac" class="w-full h-40 object-cover">
                    <div class="p-3">
                        <p class="text-yellow-500 text-xs mb-1">★★★★★</p>
                        <p class="font-semibold text-xs mb-1" style="color:#3D2314">Sac à main Caramel</p>
                        <p class="font-bold text-xs" style="color:#3D2314">60 000 CFA</p>
                    </div>
                </div>
                <div class="product-card bg-white rounded-xl overflow-hidden shadow-sm">
                    <img src="https://images.unsplash.com/photo-1591561954557-26941169b49e?w=400&q=80" alt="Sac" class="w-full h-40 object-cover">
                    <div class="p-3">
                        <p class="text-yellow-500 text-xs mb-1">★★★★★</p>
                        <p class="font-semibold text-xs mb-1" style="color:#3D2314">Sac Cadeau Premium</p>
                        <p class="font-bold text-xs" style="color:#3D2314">90 000 CFA</p>
                    </div>
                </div>
                <div class="product-card bg-white rounded-xl overflow-hidden shadow-sm">
                    <img src="https://images.unsplash.com/photo-1575032617751-6ddec2089882?w=400&q=80" alt="Sac" class="w-full h-40 object-cover">
                    <div class="p-3">
                        <p class="text-yellow-500 text-xs mb-1">★★★★☆</p>
                        <p class="font-semibold text-xs mb-1" style="color:#3D2314">Sac Cuir Lézard</p>
                        <p class="font-bold text-xs" style="color:#3D2314">75 000 CFA</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- NOS DEUX COLLECTIONS -->
<section class="py-12 px-6 bg-white">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-xl font-semibold text-center mb-8" style="color:#3D2314">Nos deux collections de sacs made in Côte d'Ivoire</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="relative overflow-hidden rounded-xl">
                <img src="https://images.unsplash.com/photo-1590874103328-eac38a683ce7?w=800&q=80" alt="Collection Joyau de Bla" class="w-full h-64 object-cover">
                <div class="absolute inset-0 flex flex-col justify-end p-6" style="background:linear-gradient(to top, rgba(61,35,20,0.85), transparent)">
                    <p class="text-white font-bold text-lg" style="font-family:'Playfair Display',serif">COLLECTION JOYAU DE BLA</p>
                    <a href="/boutique" class="text-xs mt-2 hover:underline" style="color:#E8820C">Voir la collection →</a>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-xl">
                <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=800&q=80" alt="Collection DO" class="w-full h-64 object-cover">
                <div class="absolute inset-0 flex flex-col justify-end p-6" style="background:linear-gradient(to top, rgba(61,35,20,0.85), transparent)">
                    <p class="text-white font-bold text-lg" style="font-family:'Playfair Display',serif">COLLECTION "DO"</p>
                    <a href="/boutique" class="text-xs mt-2 hover:underline" style="color:#E8820C">Voir la collection →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="py-12 px-6" style="background:#F5ECD7">
    <div class="max-w-3xl mx-auto">
        <h2 class="text-xl font-semibold text-center mb-8" style="color:#3D2314">FAQ's</h2>
        <p class="text-center text-sm text-gray-500 mb-8">Quelques réponses aux questions que vous nous posez</p>
        <div class="space-y-3">
            <details class="bg-white rounded-xl px-5 py-4 cursor-pointer">
                <summary class="font-medium text-sm flex justify-between items-center" style="color:#3D2314">
                    Que puis-je commander sur notre site (CI) ?
                    <span style="color:#E8820C">+</span>
                </summary>
                <p class="text-gray-500 text-xs mt-3 leading-relaxed">Vous pouvez commander tous nos sacs disponibles en ligne avec livraison partout en Côte d'Ivoire.</p>
            </details>
            <details class="bg-white rounded-xl px-5 py-4 cursor-pointer">
                <summary class="font-medium text-sm flex justify-between items-center" style="color:#3D2314">
                    Les sacs sont-ils faits de Côte d'Ivoire ?
                    <span style="color:#E8820C">+</span>
                </summary>
                <p class="text-gray-500 text-xs mt-3 leading-relaxed">Oui, tous nos sacs sont fabriqués artisanalement à Abidjan par nos artisans locaux.</p>
            </details>
            <details class="bg-white rounded-xl px-5 py-4 cursor-pointer">
                <summary class="font-medium text-sm flex justify-between items-center" style="color:#3D2314">
                    Pourquoi ce nom Blac Joyaux ?
                    <span style="color:#E8820C">+</span>
                </summary>
                <p class="text-gray-500 text-xs mt-3 leading-relaxed">Le nom reflète notre vision : des joyaux noirs qui portent l'héritage africain avec élégance.</p>
            </details>
            <details class="bg-white rounded-xl px-5 py-4 cursor-pointer">
                <summary class="font-medium text-sm flex justify-between items-center" style="color:#3D2314">
                    Pourquoi ce logo ?
                    <span style="color:#E8820C">+</span>
                </summary>
                <p class="text-gray-500 text-xs mt-3 leading-relaxed">Notre logo est inspiré de la poupée Joyaux de Bla, symbole de fécondité et d'héritage ashanti.</p>
            </details>
            <details class="bg-white rounded-xl px-5 py-4 cursor-pointer">
                <summary class="font-medium text-sm flex justify-between items-center" style="color:#3D2314">
                    Comment passer commande ?
                    <span style="color:#E8820C">+</span>
                </summary>
                <p class="text-gray-500 text-xs mt-3 leading-relaxed">Ajoutez votre sac au panier, remplissez vos informations et choisissez votre mode de paiement (Wave, Orange Money, MTN MoMo ou espèces).</p>
            </details>
            <details class="bg-white rounded-xl px-5 py-4 cursor-pointer">
                <summary class="font-medium text-sm flex justify-between items-center" style="color:#3D2314">
                    Comment suivre ma commande ?
                    <span style="color:#E8820C">+</span>
                </summary>
                <p class="text-gray-500 text-xs mt-3 leading-relaxed">Après confirmation, vous recevrez un message WhatsApp avec le suivi de votre livraison.</p>
            </details>
            <details class="bg-white rounded-xl px-5 py-4 cursor-pointer">
                <summary class="font-medium text-sm flex justify-between items-center" style="color:#3D2314">
                    Comment retourner un article ?
                    <span style="color:#E8820C">+</span>
                </summary>
                <p class="text-gray-500 text-xs mt-3 leading-relaxed">Contactez-nous dans les 48h suivant la réception via WhatsApp ou email pour toute demande de retour.</p>
            </details>
            <details class="bg-white rounded-xl px-5 py-4 cursor-pointer">
                <summary class="font-medium text-sm flex justify-between items-center" style="color:#3D2314">
                    Comment puis-je vous contacter sur ce site ?
                    <span style="color:#E8820C">+</span>
                </summary>
                <p class="text-gray-500 text-xs mt-3 leading-relaxed">Via le formulaire de contact, WhatsApp au +225 07 00 77 55 37 ou nos réseaux sociaux.</p>
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
            <div class="mt-4">
                <p class="text-xs text-gray-400 mb-1">Showroom Blac Joyaux</p>
                <p class="text-xs text-gray-300">Côte d'Ivoire · Commune de Cocody<br>Rond-point de la Riviera Palmeraie</p>
                <p class="text-xs text-gray-300 mt-2">Horaire d'ouverture<br>Lundi au samedi, de 09h00 à 18h00</p>
                <p class="text-xs mt-2" style="color:#E8820C">Contact / SAV<br>+225 0700775537 · +225 0564542215</p>
            </div>
        </div>
    </div>
    <div class="border-t border-white/10 pt-6 text-center text-gray-400 text-xs">
        © 2026 Blac Joyaux. Tout droit réservé. &nbsp;|&nbsp;
        <a href="legal" class="hover:text-orange-400">Confidentialité</a> &nbsp;|&nbsp;
        <a href="legal" class="hover:text-orange-400">Conditions générales</a>
    </div>
</footer>

<!-- WHATSAPP FLOTTANT -->
<a href="https://wa.me/2250700775537" target="_blank"
   class="fixed bottom-6 right-6 bg-green-500 text-white rounded-full w-14 h-14 flex items-center justify-center text-2xl shadow-xl hover:bg-green-600 transition-all z-50">
    💬
</a>

</body>
</html>

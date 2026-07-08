<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joyaux de Bla — Blac Joyaux</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background:#F5ECD7; }
        .product-card { transition: all 0.3s ease; }
        .product-card:hover { transform: translateY(-4px); }
        .couleur-btn.active { border-color: #3D2314 !important; transform: scale(1.15); }
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

<!-- HERO COLLECTION -->
<section class="relative text-white text-center py-16 px-6"
         style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('{{ asset('img/image.png') }}');background-size:cover;background-position:center;min-height:220px">
    <h1 class="text-4xl font-bold mb-4 uppercase">JOYAUX DE BLA</h1>
    <p class="text-gray-200 max-w-lg mx-auto text-sm leading-relaxed">
        Je m'appelle Joyaux de Bla. J'incarne une histoire, celle de la fécondité, de l'héritage et des traditions africaines. Nous croyons qu'il est possible de combiner tout cela dans du cuir tout en célébrant notre riche culture.
    </p>
</section>

<!-- SÉLECTEUR DE COULEURS -->
<section class="py-6 px-6 bg-white">
    <div class="max-w-5xl mx-auto">
        <p class="text-sm font-semibold mb-4" style="color:#3D2314">Choisir une couleur :</p>
        <div class="flex gap-3 flex-wrap">
            <button onclick="filtrerCouleur('noir', this)"
                    class="couleur-btn active w-9 h-9 rounded-full border-2 transition-all"
                    style="background:#1A1A1A;border-color:#3D2314" title="Noir"></button>
            <button onclick="filtrerCouleur('bleu', this)"
                    class="couleur-btn w-9 h-9 rounded-full border-2 border-gray-300 transition-all"
                    style="background:#1E3A8A" title="Bleu"></button>
            <button onclick="filtrerCouleur('dore', this)"
                    class="couleur-btn w-9 h-9 rounded-full border-2 border-gray-300 transition-all"
                    style="background:#D4AF37" title="Doré"></button>
            <button onclick="filtrerCouleur('rouge', this)"
                    class="couleur-btn w-9 h-9 rounded-full border-2 border-gray-300 transition-all"
                    style="background:#DC143C" title="Rouge"></button>
            <button onclick="filtrerCouleur('violet', this)"
                    class="couleur-btn w-9 h-9 rounded-full border-2 border-gray-300 transition-all"
                    style="background:#9B30FF" title="Violet"></button>
            <button onclick="filtrerCouleur('jaune', this)"
                    class="couleur-btn w-9 h-9 rounded-full border-2 border-gray-300 transition-all"
                    style="background:#FFD700" title="Jaune"></button>
        </div>
        <p id="couleur-label" class="text-xs text-gray-400 mt-3">Couleur sélectionnée : <span class="font-semibold" style="color:#3D2314">Noir</span></p>
    </div>
</section>

<!-- GRILLE PRODUITS -->
<section class="py-10 px-6" style="background:#F5ECD7">
    <div class="max-w-5xl mx-auto">

        <h3 class="font-bold text-sm mb-6" style="color:#3D2314">Nos sacs — Collection Joyaux de Bla</h3>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-10" id="grille-couleurs">

            <!-- 1. Noir -->
            <div class="product-card bg-white rounded-xl overflow-hidden shadow-sm" data-couleur="noir">
                <img src="{{ asset('img/Sac-noir.jpg') }}" alt="Sac Noir"
                     class="w-full h-44 object-cover cursor-pointer produit-img"
                     data-nom="Noir avec bijoux doré"
                     data-prix="50000"
                     data-couleur="Noir"
                     data-img="{{ asset('img/Sac-noir.jpg') }}"
                     data-description="Sac à main élégant en noir avec bijoux dorés. Coloration: Noir profond. Un choix sophistiqué de la collection Joyaux de Bla.">
                <div class="p-3">
                    <p class="text-xs text-gray-400 mb-1">Sac à main - Nouvelle version</p>
                    <p class="font-bold text-xs mb-1" style="color:#3D2314">Noir avec bijoux doré</p>
                    <p class="font-bold text-sm" style="color:#3D2314">50.000 CFA</p>
                </div>
            </div>

            <!-- 2. Bleu -->
            <div class="product-card bg-white rounded-xl overflow-hidden shadow-sm" data-couleur="bleu">
                <img src="{{ asset('img/Sac1-blueu.png') }}" alt="Sac Bleu"
                     class="w-full h-44 object-cover cursor-pointer produit-img"
                     data-nom="Bleu avec bijoux doré"
                     data-prix="50000"
                     data-couleur="Bleu"
                     data-img="{{ asset('img/Sac1-blueu.png') }}"
                     data-description="Sac à main en bleu vibrant avec bijoux dorés. Coloration: Bleu éclatant. Un design moderne et féminin de la collection Joyaux de Bla.">
                <div class="p-3">
                    <p class="text-xs text-gray-400 mb-1">Sac à main - Nouvelle version</p>
                    <p class="font-bold text-xs mb-1" style="color:#3D2314">Bleu avec bijoux doré</p>
                    <p class="font-bold text-sm" style="color:#3D2314">50.000 CFA</p>
                </div>
            </div>

            <!-- 3. Doré -->
            <div class="product-card bg-white rounded-xl overflow-hidden shadow-sm" data-couleur="dore">
                <img src="{{ asset('img/Sac-dore.jpg') }}" alt="Sac Doré"
                     class="w-full h-44 object-cover cursor-pointer produit-img"
                     data-nom="Doré"
                     data-prix="50000"
                     data-couleur="Doré"
                     data-img="{{ asset('img/Sac-dore.jpg') }}"
                     data-description="Sac à main en doré luxueux avec bijoux assortis. Coloration: Doré brillant. L'éclat parfait pour vos occasions spéciales - collection Joyaux de Bla.">
                <div class="p-3">
                    <p class="text-xs text-gray-400 mb-1">Sac à main - Nouvelle version</p>
                    <p class="font-bold text-xs mb-1" style="color:#3D2314">Doré</p>
                    <p class="font-bold text-sm" style="color:#3D2314">50.000 CFA</p>
                </div>
            </div>

            <!-- 4. Rouge -->
            <div class="product-card bg-white rounded-xl overflow-hidden shadow-sm" data-couleur="rouge">
                <img src="{{ asset('img/Sac-rouge.png') }}" alt="Sac Rouge"
                     class="w-full h-44 object-cover cursor-pointer produit-img"
                     data-nom="Rouge avec bijoux doré"
                     data-prix="50000"
                     data-couleur="Rouge"
                     data-img="{{ asset('img/Sac-rouge.png') }}"
                     data-description="Sac à main rouge éclatant avec bijoux dorés. Coloration: Rouge passion. Ravissant et intemporel, parfait pour toute occasion - collection Joyaux de Bla.">
                <div class="p-3">
                    <p class="text-xs text-gray-400 mb-1">Sac à main - Nouvelle version</p>
                    <p class="font-bold text-xs mb-1" style="color:#3D2314">Rouge avec bijoux doré</p>
                    <p class="font-bold text-sm" style="color:#3D2314">50.000 CFA</p>
                </div>
            </div>

            <!-- 5. Blanc / Bleu ciel -->
            <div class="product-card bg-white rounded-xl overflow-hidden shadow-sm" data-couleur="bleu">
                <img src="{{ asset('img/Sac-blanc.png') }}" alt="Sac Blanc"
                     class="w-full h-44 object-cover cursor-pointer produit-img"
                     data-nom="Bleu ciel avec bijoux doré"
                     data-prix="70000"
                     data-couleur="Bleu ciel"
                     data-img="{{ asset('img/Sac-blanc.png') }}"
                     data-description="Sac à main en bleu ciel clair avec bijoux dorés. Coloration: Bleu ciel tendre. Une teinte douce et élégante - collection Joyaux de Bla premium.">
                <div class="p-3">
                    <p class="text-xs text-gray-400 mb-1">Sac à main - Nouvelle version</p>
                    <p class="font-bold text-xs mb-1" style="color:#3D2314">Bleu ciel avec bijoux doré</p>
                    <p class="font-bold text-sm" style="color:#3D2314">70.000 CFA</p>
                </div>
            </div>

            <!-- 6. Violet / Rose -->
            <div class="product-card bg-white rounded-xl overflow-hidden shadow-sm" data-couleur="violet">
                <img src="{{ asset('img/Sac-violet.jpg') }}" alt="Sac Violet"
                     class="w-full h-44 object-cover cursor-pointer produit-img"
                     data-nom="Rose avec bijoux doré"
                     data-prix="50000"
                     data-couleur="Rose"
                     data-img="{{ asset('img/Sac-violet.jpg') }}"
                     data-description="Sac à main en rose délicat avec bijoux dorés. Coloration: Rose tendre. Féminin et sophistiqué pour les femmes modernes - collection Joyaux de Bla.">
                <div class="p-3">
                    <p class="text-xs text-gray-400 mb-1">Sac à main - Nouvelle version</p>
                    <p class="font-bold text-xs mb-1" style="color:#3D2314">Rose avec bijoux doré</p>
                    <p class="font-bold text-sm" style="color:#3D2314">50.000 CFA</p>
                </div>
            </div>

        </div>

        <!-- VOUS AIMEREZ AUSSI -->
        <h3 class="font-bold text-sm mb-6" style="color:#3D2314">Vous aimerez aussi...</h3>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">

            <!-- 7. Croco jaune -->
            <div class="product-card bg-white rounded-xl overflow-hidden shadow-sm">
                <img src="{{ asset('img/Sac-jaune.jpg') }}" alt="Sac Jaune"
                     class="w-full h-44 object-cover cursor-pointer produit-img"
                     data-nom="Croco jaune"
                     data-prix="70000"
                     data-couleur="Jaune"
                     data-img="{{ asset('img/Sac-jaune.jpg') }}"
                     data-description="Sac à main style croco en jaune éclatant. Coloration: Jaune vif. Un accent coloré et audacieux - collection Joyaux de Bla Vous aimerez aussi.">
                <div class="p-3">
                    <p class="text-xs text-gray-400 mb-1">Sac à main - Nouvelle version</p>
                    <p class="font-bold text-xs mb-1" style="color:#3D2314">Croco jaune</p>
                    <p class="font-bold text-sm" style="color:#3D2314">70.000 CFA</p>
                </div>
            </div>

            <!-- 8. Croco Bleu Ciel -->
            <div class="product-card bg-white rounded-xl overflow-hidden shadow-sm">
                <img src="{{ asset('img/Sac.jpg') }}" alt="Sac Croco Bleu"
                     class="w-full h-44 object-cover cursor-pointer produit-img"
                     data-nom="Croco Bleu Ciel petit format"
                     data-prix="70000"
                     data-couleur="Bleu ciel"
                     data-img="{{ asset('img/Sac.jpg') }}"
                     data-description="Sac à main format compact style croco en bleu ciel. Coloration: Bleu ciel. Parfait pour celles qui préfèrent la discrétion - collection Joyaux de Bla.">
                <div class="p-3">
                    <p class="text-xs text-gray-400 mb-1">Sac à main – Nouvelle version</p>
                    <p class="font-bold text-xs mb-1" style="color:#3D2314">Croco Bleu Ciel (petit format)</p>
                    <p class="font-bold text-sm" style="color:#3D2314">70.000 CFA</p>
                </div>
            </div>

            <!-- 9. Imprimé peau de serpent -->
            <div class="product-card bg-white rounded-xl overflow-hidden shadow-sm">
                <img src="{{ asset('img/Sac-marroncasse.jpg') }}" alt="Sac Serpent"
                     class="w-full h-44 object-cover cursor-pointer produit-img"
                     data-nom="Imprimé peau de serpent"
                     data-prix="70000"
                     data-couleur="Marron"
                     data-img="{{ asset('img/Sac-marroncasse.jpg') }}"
                     data-description="Sac à main avec motif peau de serpent en marron cassé. Coloration: Marron chaud. Sophistiqué et tendance - collection Joyaux de Bla Vous aimerez aussi.">
                <div class="p-3">
                    <p class="text-xs text-gray-400 mb-1">Sac à main – Nouvelle version</p>
                    <p class="font-bold text-xs mb-1" style="color:#3D2314">Imprimé peau de serpent (petit format)</p>
                    <p class="font-bold text-sm" style="color:#3D2314">70.000 CFA</p>
                </div>
            </div>

            <!-- 10. Vert avec bijoux doré -->
            <div class="product-card bg-white rounded-xl overflow-hidden shadow-sm">
                <img src="{{ asset('img/Sac-Blac-Joyaux-Vert-2-416x416.jpg') }}" alt="Sac Vert"
                     class="w-full h-44 object-cover cursor-pointer produit-img"
                     data-nom="Vert avec bijoux doré"
                     data-prix="70000"
                     data-couleur="Vert"
                     data-img="{{ asset('img/Sac-Blac-Joyaux-Vert-2-416x416.jpg') }}"
                     data-description="Sac à main façon croco en vert profond avec bijoux dorés. Coloration: Vert émeraude. Un choix audacieux et raffiné de la collection Joyaux de Bla.">
                <div class="p-3">
                    <p class="text-xs text-gray-400 mb-1">Sac à main – Nouvelle version</p>
                    <p class="font-bold text-xs mb-1" style="color:#3D2314">Vert avec bijoux doré</p>
                    <p class="font-bold text-sm" style="color:#3D2314">70.000 CFA</p>
                </div>
            </div>

            <!-- 11. Marron avec chaîne dorée -->
            <div class="product-card bg-white rounded-xl overflow-hidden shadow-sm">
                <img src="{{ asset('img/sac-marron.jpg') }}" alt="Sac Marron"
                     class="w-full h-44 object-cover cursor-pointer produit-img"
                     data-nom="Marron avec chaîne dorée"
                     data-prix="60000"
                     data-couleur="Marron"
                     data-img="{{ asset('img/sac-marron.jpg') }}"
                     data-description="Sac à main en marron chaleureux avec chaîne dorée. Coloration: Marron cognac. Un intemporel du quotidien - collection Joyaux de Bla.">
                <div class="p-3">
                    <p class="text-xs text-gray-400 mb-1">Sac à main – Nouvelle version</p>
                    <p class="font-bold text-xs mb-1" style="color:#3D2314">Marron avec chaîne dorée</p>
                    <p class="font-bold text-sm" style="color:#3D2314">60.000 CFA</p>
                </div>
            </div>

            <!-- 12. Cuir marron structuré -->
            <div class="product-card bg-white rounded-xl overflow-hidden shadow-sm">
                <img src="{{ asset('img/sac-cui-marron.jpg') }}" alt="Sac Cuir Marron"
                     class="w-full h-44 object-cover cursor-pointer produit-img"
                     data-nom="Cuir marron structuré"
                     data-prix="65000"
                     data-couleur="Marron"
                     data-img="{{ asset('img/sac-cui-marron.jpg') }}"
                     data-description="Sac à main en cuir marron à la coupe structurée. Coloration: Marron cuir. Élégance sobre et robuste - collection Joyaux de Bla.">
                <div class="p-3">
                    <p class="text-xs text-gray-400 mb-1">Sac à main – Nouvelle version</p>
                    <p class="font-bold text-xs mb-1" style="color:#3D2314">Cuir marron structuré</p>
                    <p class="font-bold text-sm" style="color:#3D2314">65.000 CFA</p>
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
            <p class="text-gray-300 text-xs leading-relaxed mb-4">
                Nous sommes une marque ivoirienne de maroquinerie qui raconte
                une histoire, celle de la Côte d'Ivoire, de sa résilience,
                de ses traditions africaines.
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
                <li><a href="https://www.instagram.com/blacjoyaux" class="hover:text-orange-400">📸 Instagram</a></li>
                <li><a href="https://www.tiktok.com/@blac.joyaux" class="hover:text-orange-400">🎵 TikTok</a></li>
                <li><a href="https://www.facebook.com/" class="hover:text-orange-400">📘 Facebook</a></li>
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
        © 2026 Blac Joyaux. Tout droit réservé.
        &nbsp;|&nbsp;
        <a href="/legal" class="hover:text-orange-400">Confidentialité</a>
        &nbsp;|&nbsp;
        <a href="/legal" class="hover:text-orange-400">Conditions générales</a>
    </div>

</footer>

<!-- WHATSAPP FLOTTANT -->
<a href="https://wa.me/2250708771557" target="_blank"
   class="fixed bottom-6 right-6 bg-green-500 text-white rounded-full w-14 h-14 flex items-center justify-center text-2xl shadow-xl hover:bg-green-600 transition-all z-50">
    💬
</a>

<!-- MODALE PRODUIT -->
<div id="modalProduit" class="hidden fixed inset-0 z-[60] flex items-center justify-center p-4" style="background:rgba(0,0,0,0.6)">
    <div class="bg-white rounded-2xl overflow-hidden max-w-md w-full relative max-h-[90vh] overflow-y-auto">
        <button onclick="fermerModal()" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/90 flex items-center justify-center text-lg z-10" style="color:#3D2314">
            <i class="fas fa-times"></i>
        </button>
        <img id="modalImg" src="" alt="" class="w-full h-72 object-cover">
        <div class="p-5">
            <p id="modalCouleur" class="text-xs font-medium tracking-widest uppercase mb-1" style="color:#E8820C"></p>
            <h3 id="modalNom" class="font-bold text-lg mb-1" style="color:#3D2314"></h3>
            <p id="modalPrix" class="font-bold text-xl mb-4" style="color:#E8820C"></p>
            <p id="modalDescription" class="text-sm text-gray-600 mb-5 leading-relaxed"></p>
            <button onclick="ajouterAuPanierModal()"
                    class="w-full text-center text-white font-semibold py-3 rounded-xl text-sm mb-3" style="background:#3D2314">
                Ajouter au panier
            </button>
            <div class="flex gap-3">
                <a id="modalMessenger" href="#" target="_blank"
                   class="flex-1 flex items-center justify-center gap-2 text-white font-semibold py-3 rounded-xl text-sm" style="background:#1877F2">
                    <i class="fab fa-facebook-messenger"></i> Messenger
                </a>
                <a id="modalWhatsapp" href="#" target="_blank"
                   class="flex-1 flex items-center justify-center gap-2 text-white font-semibold py-3 rounded-xl text-sm" style="background:#25D366">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
            </div>
        </div>
    </div>
</div>

<!-- TOAST NOTIFICATION PANIER -->
<div id="toastPanier" class="hidden fixed bottom-6 left-1/2 -translate-x-1/2 z-[70] bg-white shadow-2xl rounded-xl px-5 py-4 flex items-center gap-4 max-w-sm w-[90%]">
    <span class="text-2xl">✅</span>
    <div class="flex-1">
        <p class="text-sm font-semibold" style="color:#3D2314">Ajouté au panier</p>
        <p id="toastPanierNom" class="text-xs text-gray-500"></p>
    </div>
    <a href="/panier" class="text-xs font-semibold whitespace-nowrap" style="color:#E8820C">Voir le panier</a>
    <button onclick="fermerToast()" class="text-gray-400 hover:text-gray-600 text-xl leading-none px-1">&times;</button>
</div>

<script>
let produitModalCourant = null;

const menuBtn = document.getElementById('menuBtn');
const closeMenu = document.getElementById('closeMenu');
const sidebar = document.getElementById('sidebar');
const overlay = document.getElementById('overlay');
menuBtn.onclick = () => { sidebar.style.left = "0"; overlay.classList.remove("hidden"); }
closeMenu.onclick = closeSidebar;
overlay.onclick = closeSidebar;
function closeSidebar(){ sidebar.style.left="-300px"; overlay.classList.add("hidden"); }

function filtrerCouleur(couleur, btn) {
    document.querySelectorAll('.couleur-btn').forEach(b => {
        b.classList.remove('active');
        b.style.borderColor = '#d1d5db';
        b.style.transform = 'scale(1)';
    });
    btn.classList.add('active');
    btn.style.borderColor = '#3D2314';
    btn.style.transform = 'scale(1.15)';
    const produits = document.querySelectorAll('#grille-couleurs > div');
    produits.forEach(p => {
        p.style.display = p.dataset.couleur === couleur ? 'block' : 'none';
    });
    const labels = { 'noir':'Noir', 'bleu':'Bleu', 'dore':'Doré', 'rouge':'Rouge', 'violet':'Violet', 'jaune':'Jaune' };
    document.getElementById('couleur-label').innerHTML = 'Couleur sélectionnée : <span class="font-semibold" style="color:#3D2314">' + labels[couleur] + '</span>';
}

// ---- MODALE PRODUIT ----
function ouvrirModal(nom, prix, img, couleur, description) {
    produitModalCourant = { nom, prix, img, collection: 'Joyau de Bla', description: description };

    document.getElementById('modalImg').src = img;
    document.getElementById('modalImg').alt = nom;
    document.getElementById('modalCouleur').textContent = 'Couleur : ' + couleur;
    document.getElementById('modalNom').textContent = nom;
    document.getElementById('modalPrix').textContent = prix.toLocaleString('fr-FR') + ' CFA';
    document.getElementById('modalDescription').textContent = description;

    const msg = `Bonjour, je veux commander le sac ${nom} (${couleur}) à ${prix.toLocaleString('fr-FR')} CFA`;
    document.getElementById('modalWhatsapp').href = 'https://wa.me/2250708771557?text=' + encodeURIComponent(msg);
    document.getElementById('modalMessenger').href = 'https://m.me/blacjoyaux?text=' + encodeURIComponent(msg);

    document.getElementById('modalProduit').classList.remove('hidden');
}
function ajouterAuPanierModal() {
    if (!produitModalCourant) return;
    let panier = JSON.parse(localStorage.getItem('panier') || '[]');
    const index = panier.findIndex(p => p.nom === produitModalCourant.nom);
    if (index !== -1) {
        panier[index].qty += 1;
    } else {
        panier.push({ ...produitModalCourant, qty: 1 });
    }
    localStorage.setItem('panier', JSON.stringify(panier));
    fermerModal();
    afficherToast(produitModalCourant.nom);
}
let toastTimeout;
function afficherToast(nomProduit) {
    document.getElementById('toastPanierNom').textContent = nomProduit;
    const toast = document.getElementById('toastPanier');
    toast.classList.remove('hidden');
    clearTimeout(toastTimeout);
    toastTimeout = setTimeout(fermerToast, 5000);
}
function fermerToast() {
    document.getElementById('toastPanier').classList.add('hidden');
}
function fermerModal(){
    document.getElementById('modalProduit').classList.add('hidden');
}
document.getElementById('modalProduit').addEventListener('click', (e) => {
    if (e.target.id === 'modalProduit') fermerModal();
});

document.querySelectorAll('.produit-img').forEach(img => {
    img.addEventListener('click', () => {
        ouvrirModal(
            img.dataset.nom,
            parseInt(img.dataset.prix, 10),
            img.dataset.img,
            img.dataset.couleur,
            img.dataset.description
        );
    });
});

filtrerCouleur('noir', document.querySelector('.couleur-btn'));
</script>

</body>
</html>

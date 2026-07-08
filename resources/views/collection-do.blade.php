<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collection DO — Blac Joyaux</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Montserrat', sans-serif; background:#F5ECD7; }
        .titre { font-family:'Playfair Display',serif; }
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
            @if(auth('client')->check())
                <a href="/mon-compte"><i class="fas fa-user cursor-pointer"></i></a>
            @else
                <a href="/connexion"><i class="fas fa-user cursor-pointer"></i></a>
            @endif
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

<?php
// ============================================================
// DONNÉES PRODUITS — Collection DO (Boigny)
// À adapter avec tes vraies infos/images
// ============================================================
$produitsDO = [
    [
        'nom' => 'Cuir Marron',
        'sousTitre' => 'Sac à main - Collection DO',
        'prix' => 50000,
       'img' => asset('img/sac-cui-marron.jpg'),
        'couleur' => 'Marron chaud',
        'description' => "Sac à main en cuir marron élégant de la collection DO, inspiré par l'héritage Boigny. Coloration : Marron chaud. Un classique intemporel alliant tradition et raffinement.",
    ],
    [
        'nom' => 'Croco Lézard',
        'sousTitre' => 'Sac à main - Collection DO',
        'prix' => 70000,
        'img' => asset('img/sacnoirpetit.jpg'),
        'couleur' => 'Marron texturé',
        'description' => "Sac à main façon croco lézard, alliant texture raffinée et élégance intemporelle. Coloration : Marron texturé. Pièce phare de la collection DO.",
    ],
    [
        'nom' => 'Cuir Marron (avec boucle)',
        'sousTitre' => 'Sac à main - Collection DO',
        'prix' => 50000,
        'img' => asset('img/sac-marron.jpg'),
        'couleur' => 'Marron classique',
        'description' => "Sac à main en cuir marron avec boucle dorée décorative. Coloration : Marron classique. Un détail distinctif pour la collection DO.",
    ],
];
?>

<!-- HERO -->
<section class="relative text-white text-center py-20 px-6"
         style="background-image:linear-gradient(rgba(61,35,20,0.6),rgba(61,35,20,0.6)),url('{{ asset('img/image.png') }}');background-size:cover;background-position:center;min-height:280px">
    <h1 class="text-4xl font-bold mb-3 titre">DO-DOMINIQUE</h1>

</section>

<!-- GRILLE PRODUITS -->
<section class="py-12 px-6" style="background:#F5ECD7">
    <div class="max-w-5xl mx-auto">
        <div class="grid grid-cols-2 md:grid-cols-3 gap-5">
            @foreach($produitsDO as $p)
                <div class="product-card bg-white rounded-xl overflow-hidden shadow-sm">
                    <img src="{{ $p['img'] }}" alt="{{ $p['nom'] }}"
                         class="w-full h-44 object-cover cursor-pointer produit-img"
                         data-nom="{{ $p['nom'] }}"
                         data-soustitre="{{ $p['sousTitre'] }}"
                         data-prix="{{ $p['prix'] }}"
                         data-img="{{ $p['img'] }}"
                         data-couleur="{{ $p['couleur'] }}"
                         data-description="{{ $p['description'] }}">
                    <div class="p-4 text-center">
                        <p class="text-xs text-gray-400 mb-1">{{ $p['sousTitre'] }}</p>
                        <p class="font-bold text-sm mb-2" style="color:#3D2314">{{ $p['nom'] }}</p>
                        <p class="font-bold text-sm" style="color:#3D2314">{{ number_format($p['prix'], 0, ',', '.') }} CFA</p>
                    </div>
                </div>
            @endforeach
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
            <p class="text-xs font-medium tracking-widest uppercase mb-1" style="color:#E8820C">Collection DO</p>
            <h3 id="modalNom" class="font-bold text-lg mb-1" style="color:#3D2314"></h3>
            <p id="modalSousTitre" class="text-xs text-gray-500 mb-1"></p>
            <p id="modalCouleur" class="text-xs text-gray-400 mb-3"></p>
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

// ---- MODALE PRODUIT ----
function ouvrirModal(nom, sousTitre, prix, img, couleur, description) {
    produitModalCourant = { nom, prix, img, collection: 'Collection DO', description: description + ' (Couleur : ' + couleur + ')' };

    document.getElementById('modalImg').src = img;
    document.getElementById('modalImg').alt = nom;
    document.getElementById('modalNom').textContent = nom;
    document.getElementById('modalSousTitre').textContent = sousTitre;
    document.getElementById('modalCouleur').textContent = 'Couleur : ' + couleur;
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
            img.dataset.soustitre,
            parseInt(img.dataset.prix, 10),
            img.dataset.img,
            img.dataset.couleur,
            img.dataset.description
        );
    });
});
</script>

</body>
</html>

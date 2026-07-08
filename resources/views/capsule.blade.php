<?php
// ============================================================
// DONNÉES PRODUITS — Capsule 2026 (page grille)
// Les mêmes données que la fiche-produit, pour rester synchronisé.
// ============================================================
$produitsCapsule = [
    'akwaba' => [
        'nom'        => 'Le Akwaba',
        'sousTitre'  => 'Sac Portefeuille Capsule 2026',
        'prix'       => 85000,
        'img'        => 'https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=800&q=80',
        'couleurs'   => [
            ['nom' => 'Noir',   'hex' => '#1A1A1A'],
            ['nom' => 'Marron', 'hex' => '#6B3F1D'],
            ['nom' => 'Beige',  'hex' => '#D8C3A5'],
        ],
        'description' => "Akwaba signifie \"Bienvenue\" en langue akan. Ce sac de bureau élégant accompagne la femme cadre dans son quotidien professionnel avec style et authenticité ivoirienne.",
    ],
    'aya' => [
        'nom'        => 'Le Aya',
        'sousTitre'  => 'Sac Cadeau Premium Capsule 2026',
        'prix'       => 70000,
        'img'        => 'https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?w=800&q=80',
        'couleurs'   => [
            ['nom' => 'Caramel', 'hex' => '#B5651D'],
            ['nom' => 'Rouge',   'hex' => '#B22222'],
            ['nom' => 'Violet',  'hex' => '#6A0DAD'],
        ],
        'description' => "Aya signifie \"fougère\" en akan, symbole de persévérance et d'endurance. Ce sac élégant est la parfaite attention pour offrir à une femme forte et accomplie.",
    ],
    'abla' => [
        'nom'        => 'Le Abla',
        'sousTitre'  => 'Mini Sac Soirée Capsule 2026',
        'prix'       => 60000,
        'img'        => 'https://images.unsplash.com/photo-1591561954557-26941169b49e?w=800&q=80',
        'couleurs'   => [
            ['nom' => 'Or',       'hex' => '#D4AF37'],
            ['nom' => 'Noir',     'hex' => '#1A1A1A'],
            ['nom' => 'Bordeaux', 'hex' => '#5E1A28'],
        ],
        'description' => "Abla signifie \"née un mardi\" en akan. Ce mini sac de soirée est conçu pour les femmes qui veulent briller lors des cérémonies et événements spéciaux.",
    ],
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capsule 2026 — Blac Joyaux</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family:'Poppins',sans-serif; background:#F5ECD7; }
        .titre { font-family:'Playfair Display',serif; }
        .product-card { transition: all 0.3s ease; }
        .product-card:hover { transform: translateY(-4px); }
        .couleur-modal-btn.active { border-color:#3D2314 !important; transform:scale(1.15); }
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

<!-- HERO -->
<section class="relative text-white text-center py-20 px-6"
         style="background-image:linear-gradient(rgba(61,35,20,0.6),rgba(61,35,20,0.6)),url('{{ asset('img/capsule-2026.jpg') }}');background-size:cover;background-position:center;min-height:280px">
    <h1 class="text-4xl font-bold mb-3 titre uppercase">Capsule 2026</h1>
    <p class="text-lg italic text-gray-100 max-w-lg mx-auto">
        Trois pièces d'exception, pensées pour la femme ivoirienne moderne — Akwaba, Aya et Abla.
    </p>
</section>

<!-- GRILLE PRODUITS -->
<section class="py-12 px-6" style="background:#F5ECD7">
    <div class="max-w-5xl mx-auto">
        <div class="grid grid-cols-2 md:grid-cols-3 gap-5">
            @foreach($produitsCapsule as $cle => $p)
                <div class="product-card bg-white rounded-xl overflow-hidden shadow-sm">
                    <img src="{{ $p['img'] }}" alt="{{ $p['nom'] }}"
                         class="w-full h-44 object-cover cursor-pointer produit-img"
                         data-cle="{{ $cle }}">
                    <div class="p-4 text-center">
                        <p class="text-xs text-gray-400 mb-1">{{ $p['sousTitre'] }}</p>
                        <p class="font-bold text-sm mb-2" style="color:#3D2314">{{ $p['nom'] }}</p>
                        <p class="font-bold text-sm" style="color:#3D2314">{{ number_format($p['prix'], 0, ',', '.') }} FCFA</p>
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
                <li><a href="/capsule" class="hover:text-orange-400">Capsule 2026</a></li>
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
            <p class="text-xs font-medium tracking-widest uppercase mb-1" style="color:#E8820C">Capsule 2026</p>
            <h3 id="modalNom" class="font-bold text-lg mb-1" style="color:#3D2314"></h3>
            <p id="modalSousTitre" class="text-xs text-gray-500 mb-3"></p>
            <p id="modalPrix" class="font-bold text-xl mb-4" style="color:#E8820C"></p>

            <!-- SÉLECTEUR DE COULEUR -->
            <div class="mb-4">
                <p class="text-sm font-semibold mb-2" style="color:#3D2314">Couleur : <span id="modalCouleurLabel"></span></p>
                <div id="modalCouleurs" class="flex gap-3"></div>
            </div>

            <p id="modalDescription" class="text-sm text-gray-600 mb-5 leading-relaxed"></p>

            <button onclick="ajouterAuPanierModal()"
                    class="w-full text-center text-white font-semibold py-3 rounded-xl text-sm mb-3" style="background:#3D2314">
                Ajouter au panier
            </button>

            <div class="flex gap-3 mb-3">
                <a id="modalMessenger" href="#" target="_blank"
                   class="flex-1 flex items-center justify-center gap-2 text-white font-semibold py-3 rounded-xl text-sm" style="background:#1877F2">
                    <i class="fab fa-facebook-messenger"></i> Messenger
                </a>
                <a id="modalWhatsapp" href="#" target="_blank"
                   class="flex-1 flex items-center justify-center gap-2 text-white font-semibold py-3 rounded-xl text-sm" style="background:#25D366">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
            </div>
            <a id="modalFicheComplete" href="#"
               class="block text-center text-sm font-semibold py-2" style="color:#3D2314">
                Voir la fiche complète →
            </a>
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
// ---- DONNÉES CÔTÉ JS (miroir du tableau PHP) ----
const produitsCapsule = @json($produitsCapsule);
let coupureCouleur = null;
let produitOuvert = null;

// MENU LATERAL
const menuBtn = document.getElementById('menuBtn');
const closeMenu = document.getElementById('closeMenu');
const sidebar = document.getElementById('sidebar');
const overlay = document.getElementById('overlay');
menuBtn.onclick = () => { sidebar.style.left = "0"; overlay.classList.remove("hidden"); }
closeMenu.onclick = closeSidebar;
overlay.onclick = closeSidebar;
function closeSidebar(){ sidebar.style.left="-300px"; overlay.classList.add("hidden"); }

// ---- MODALE PRODUIT ----
function ouvrirModal(cle) {
    const p = produitsCapsule[cle];
    produitOuvert = cle;
    coupureCouleur = p.couleurs[0].nom;

    document.getElementById('modalImg').src = p.img;
    document.getElementById('modalImg').alt = p.nom;
    document.getElementById('modalNom').textContent = p.nom;
    document.getElementById('modalSousTitre').textContent = p.sousTitre;
    document.getElementById('modalPrix').textContent = p.prix.toLocaleString('fr-FR') + ' FCFA';
    document.getElementById('modalDescription').textContent = p.description;
    document.getElementById('modalCouleurLabel').textContent = coupureCouleur;
    document.getElementById('modalFicheComplete').href = '/capsule/produit?nom=' + cle;

    const zoneCouleurs = document.getElementById('modalCouleurs');
    zoneCouleurs.innerHTML = '';
    p.couleurs.forEach((c, i) => {
        const btn = document.createElement('button');
        btn.className = 'couleur-modal-btn w-9 h-9 rounded-full border-2 transition-all ' + (i === 0 ? 'active' : 'border-gray-300');
        btn.style.background = c.hex;
        if (i === 0) { btn.style.borderColor = '#3D2314'; btn.style.transform = 'scale(1.15)'; }
        btn.title = c.nom;
        btn.onclick = () => selectCouleurModal(c.nom, btn);
        zoneCouleurs.appendChild(btn);
    });

    majLiensModal();
    document.getElementById('modalProduit').classList.remove('hidden');
}

function selectCouleurModal(nom, btn) {
    coupureCouleur = nom;
    document.getElementById('modalCouleurLabel').textContent = nom;
    document.querySelectorAll('.couleur-modal-btn').forEach(b => {
        b.classList.remove('active');
        b.style.borderColor = '#d1d5db';
        b.style.transform = 'scale(1)';
    });
    btn.classList.add('active');
    btn.style.borderColor = '#3D2314';
    btn.style.transform = 'scale(1.15)';
    majLiensModal();
}

function majLiensModal() {
    const p = produitsCapsule[produitOuvert];
    const msg = `Bonjour, je veux commander le sac ${p.nom} (${coupureCouleur}) à ${p.prix.toLocaleString('fr-FR')} FCFA`;
    document.getElementById('modalWhatsapp').href = 'https://wa.me/2250708771557?text=' + encodeURIComponent(msg);
    document.getElementById('modalMessenger').href = 'https://m.me/blacjoyaux?text=' + encodeURIComponent(msg);
}

function ajouterAuPanierModal() {
    const p = produitsCapsule[produitOuvert];
    const cle = p.nom + ' - ' + coupureCouleur;
    let panier = JSON.parse(localStorage.getItem('panier') || '[]');
    const index = panier.findIndex(x => x.nom === cle);
    if (index !== -1) {
        panier[index].qty += 1;
    } else {
        panier.push({
            nom: cle,
            prix: p.prix,
            img: p.img,
            collection: 'Capsule 2026',
            description: p.description + ' (Couleur : ' + coupureCouleur + ')',
            qty: 1
        });
    }
    localStorage.setItem('panier', JSON.stringify(panier));
    fermerModal();
    afficherToast(cle);
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
    img.addEventListener('click', () => ouvrirModal(img.dataset.cle));
});
</script>

</body>
</html>

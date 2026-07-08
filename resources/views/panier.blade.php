<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon panier — Blac Joyaux</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family:'Poppins',sans-serif; background:#F5ECD7; }
        .titre { font-family:'Playfair Display',serif; }
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

<!-- PANIER -->
<section class="px-6 py-10">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-2xl font-bold titre mb-8" style="color:#3D2314">Mon panier</h1>

        <div id="panierContenu" class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- injecté par JS -->
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
                <a href="#">📸</a>
                <a href="#">🎵</a>
                <a href="#">📘</a>
                <a href="https://wa.me/2250708771557">💬</a>
            </div>
            <p class="text-xs text-gray-300">
                <span style="color:#E8820C">Showroom Blac Joyaux</span><br>
                Côte d'Ivoire – Commune de Cocody<br>
                Rond-point de la Riviera Palmeraie<br><br>
                Lundi au samedi, de 09h00 à 18h00<br><br>
                <span style="color:#E8820C">Contact / SAV</span><br>
                +225 0708771557 | +225 0564542215
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
<a href="https://wa.me/2250708771557" target="_blank"
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

function getPanier() {
    try {
        return JSON.parse(localStorage.getItem('panier')) || [];
    } catch (e) {
        return [];
    }
}

function sauvegarderPanier(panier) {
    localStorage.setItem('panier', JSON.stringify(panier));
}

function changerQuantite(index, delta) {
    const panier = getPanier();
    panier[index].qty = Math.max(1, panier[index].qty + delta);
    sauvegarderPanier(panier);
    afficherPanier();
}

function supprimerArticle(index) {
    const panier = getPanier();
    panier.splice(index, 1);
    sauvegarderPanier(panier);
    afficherPanier();
}

function afficherPanier() {
    const panier = getPanier();
    const conteneur = document.getElementById('panierContenu');

    if (panier.length === 0) {
        conteneur.innerHTML = `
            <div class="md:col-span-3 bg-white rounded-2xl p-10 text-center shadow-sm">
                <p class="text-4xl mb-4">🛍️</p>
                <p class="text-gray-500 text-sm mb-6">Votre panier est vide pour le moment.</p>
                <a href="/boutique" class="inline-block text-white text-sm font-semibold px-6 py-3 rounded-xl" style="background:#3D2314">
                    Découvrir la boutique
                </a>
            </div>
        `;
        return;
    }

    let total = 0;
    let articlesHtml = '';

    panier.forEach((item, index) => {
        const sousTotal = item.prix * item.qty;
        total += sousTotal;
        articlesHtml += `
            <div class="bg-white rounded-2xl shadow-sm p-4 flex items-center gap-4 mb-4">
                <img src="${item.img}" alt="${item.nom}" class="w-20 h-20 object-cover rounded-xl">
                <div class="flex-1">
                    <p class="text-xs" style="color:#E8820C">${item.collection || ''}</p>
                    <p class="font-semibold text-sm mb-1" style="color:#3D2314">${item.nom}</p>
                    <p class="font-bold text-sm" style="color:#3D2314">${item.prix.toLocaleString('fr-FR')} FCFA</p>
                </div>
                <div class="flex flex-col items-end gap-2">
                    <div class="flex items-center gap-2 border rounded-full px-2 py-1" style="border-color:#3D2314">
                        <button onclick="changerQuantite(${index}, -1)" class="w-6 h-6 text-sm" style="color:#3D2314">−</button>
                        <span class="text-xs font-semibold w-4 text-center">${item.qty}</span>
                        <button onclick="changerQuantite(${index}, 1)" class="w-6 h-6 text-sm" style="color:#3D2314">+</button>
                    </div>
                    <button onclick="supprimerArticle(${index})" class="text-xs text-red-500 hover:underline">
                        <i class="fas fa-trash"></i> Retirer
                    </button>
                </div>
            </div>
        `;
    });

    conteneur.innerHTML = `
        <div class="md:col-span-2">
            ${articlesHtml}
        </div>
        <div>
            <div class="bg-white rounded-2xl shadow-sm p-5 sticky top-24">
                <h2 class="font-bold text-sm mb-4" style="color:#3D2314">Récapitulatif</h2>
                <div class="flex justify-between text-sm mb-2">
                    <span class="text-gray-500">Sous-total</span>
                    <span style="color:#3D2314">${total.toLocaleString('fr-FR')} FCFA</span>
                </div>
                <div class="flex justify-between text-sm mb-4">
                    <span class="text-gray-500">Livraison</span>
                    <span style="color:#E8820C">Gratuite</span>
                </div>
                <div class="border-t pt-4 flex justify-between mb-6">
                    <span class="font-bold text-sm" style="color:#3D2314">Total</span>
                    <span class="font-bold text-lg" style="color:#3D2314">${total.toLocaleString('fr-FR')} FCFA</span>
                </div>
                <a href="/commande" class="block text-center text-white font-semibold py-3 rounded-xl text-sm" style="background:#3D2314">
                    Passer la commande
                </a>
            </div>
        </div>
    `;
}

afficherPanier();
</script>

</body>
</html>

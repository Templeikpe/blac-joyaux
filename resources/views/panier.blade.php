<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier — Blac Joyaux</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background:#F5ECD7; }
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
            <i class="fas fa-search cursor-pointer"></i>
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
<section class="py-12 px-6">
    <div class="max-w-3xl mx-auto">

        <h1 class="text-2xl font-bold mb-8 text-center" style="color:#3D2314">Mon Panier</h1>

        <!-- Articles panier -->
        <div class="space-y-4 mb-8" id="panier-items">

            <!-- Article 1 -->
            <div class="bg-white rounded-2xl p-4 flex items-center gap-4 shadow-sm">
                <img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=200&q=80"
                     alt="Sac" class="w-20 h-20 object-cover rounded-xl">
                <div class="flex-1">
                    <p class="text-xs font-medium mb-1" style="color:#E8820C">Joyau de Bla</p>
                    <h3 class="font-semibold text-sm mb-1" style="color:#3D2314">Sac à main Noir</h3>
                    <p class="text-xs text-gray-400">Cuir véritable · Noir</p>
                </div>
                <div class="flex flex-col items-end gap-2">
                    <p class="font-bold text-sm" style="color:#3D2314">50 000 FCFA</p>
                    <div class="flex items-center border rounded-lg overflow-hidden">
                        <button onclick="changeQty(this, -1)" class="px-2 py-1 text-sm hover:bg-gray-100" style="color:#3D2314">−</button>
                        <span class="qty px-3 py-1 text-sm border-x">1</span>
                        <button onclick="changeQty(this, 1)" class="px-2 py-1 text-sm hover:bg-gray-100" style="color:#3D2314">+</button>
                    </div>
                    <button onclick="supprimerArticle(this)" class="text-xs text-red-400 hover:text-red-600">Supprimer</button>
                </div>
            </div>

            <!-- Article 2 -->
            <div class="bg-white rounded-2xl p-4 flex items-center gap-4 shadow-sm">
                <img src="https://images.unsplash.com/photo-1590874103328-eac38a683ce7?w=200&q=80"
                     alt="Sac" class="w-20 h-20 object-cover rounded-xl">
                <div class="flex-1">
                    <p class="text-xs font-medium mb-1" style="color:#E8820C">Collection DO</p>
                    <h3 class="font-semibold text-sm mb-1" style="color:#3D2314">Sac Cuir Marron</h3>
                    <p class="text-xs text-gray-400">Cuir véritable · Marron</p>
                </div>
                <div class="flex flex-col items-end gap-2">
                    <p class="font-bold text-sm" style="color:#3D2314">70 000 FCFA</p>
                    <div class="flex items-center border rounded-lg overflow-hidden">
                        <button onclick="changeQty(this, -1)" class="px-2 py-1 text-sm hover:bg-gray-100" style="color:#3D2314">−</button>
                        <span class="qty px-3 py-1 text-sm border-x">1</span>
                        <button onclick="changeQty(this, 1)" class="px-2 py-1 text-sm hover:bg-gray-100" style="color:#3D2314">+</button>
                    </div>
                    <button onclick="supprimerArticle(this)" class="text-xs text-red-400 hover:text-red-600">Supprimer</button>
                </div>
            </div>

        </div>

        <!-- Récapitulatif -->
        <div class="bg-white rounded-2xl p-6 shadow-sm mb-6">
            <h2 class="font-bold text-sm mb-4" style="color:#3D2314">Récapitulatif</h2>
            <div class="space-y-3 text-sm">
                <div class="flex justify-between">
                    <span class="text-gray-500">Sous-total</span>
                    <span class="font-medium" style="color:#3D2314">120 000 FCFA</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-500">Livraison</span>
                    <span class="font-medium" style="color:#E8820C">Gratuite</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-500">Délai</span>
                    <span class="font-medium" style="color:#3D2314">1 à 3 jours</span>
                </div>
                <div class="border-t pt-3 flex justify-between">
                    <span class="font-bold" style="color:#3D2314">Total</span>
                    <span class="font-bold text-lg" style="color:#3D2314">120 000 FCFA</span>
                </div>
            </div>
        </div>

        <!-- Paiement -->
        <div class="bg-white rounded-2xl p-6 shadow-sm mb-6">
            <h2 class="font-bold text-sm mb-4" style="color:#3D2314">Mode de paiement</h2>
            <div class="space-y-3">
                <label class="flex items-center gap-3 cursor-pointer">
                    <input type="radio" name="paiement" value="especes" checked class="accent-orange-600">
                    <span class="text-sm" style="color:#3D2314">💵 Espèces à la livraison</span>
                </label>
                <label class="flex items-center gap-3 cursor-pointer">
                    <input type="radio" name="paiement" value="wave" class="accent-orange-600">
                    <span class="text-sm" style="color:#3D2314">📱 Wave</span>
                </label>
                <label class="flex items-center gap-3 cursor-pointer">
                    <input type="radio" name="paiement" value="orange" class="accent-orange-600">
                    <span class="text-sm" style="color:#3D2314">🟠 Orange Money</span>
                </label>
                <label class="flex items-center gap-3 cursor-pointer">
                    <input type="radio" name="paiement" value="mtn" class="accent-orange-600">
                    <span class="text-sm" style="color:#3D2314">💛 MTN MoMo</span>
                </label>
            </div>
        </div>

        <!-- CTA -->
        <div class="flex flex-col gap-3">
            <a href="/commande" class="block text-center text-white font-semibold py-4 rounded-xl text-sm hover:opacity-90 transition" style="background:#3D2314">
                Passer la commande
            </a>
            <a href="https://wa.me/2250700775537?text=Bonjour, je souhaite commander via WhatsApp"
               target="_blank"
               class="block text-center text-white font-semibold py-4 rounded-xl text-sm hover:opacity-90 transition" style="background:#25D366">
                💬 Commander via WhatsApp
            </a>
            <a href="/boutique" class="block text-center font-medium py-3 rounded-xl text-sm border-2 transition" style="border-color:#3D2314;color:#3D2314">
                ← Continuer mes achats
            </a>
        </div>

    </div>
</section>

<!-- FOOTER -->
<footer class="text-white py-10 px-6 mt-6" style="background:#3D2314">
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
            </ul>
        </div>
        <div>
            <h4 class="font-semibold mb-4 uppercase text-xs tracking-widest" style="color:#E8820C">Réseaux sociaux</h4>
            <div class="flex gap-3 mb-3 text-lg">
                <a href="#" class="hover:text-orange-400">📸</a>
                <a href="#" class="hover:text-orange-400">🎵</a>
                <a href="#" class="hover:text-orange-400">📘</a>
                <a href="#" class="hover:text-orange-400">💬</a>
            </div>
            <p class="text-xs text-gray-300">
                <span style="color:#E8820C">Showroom Blac Joyaux</span><br>
                Côte d'Ivoire – Commune de Cocody<br>
                Rond-point de la Riviera Palmeraie<br><br>
                Lundi au samedi, de 09h00 à 18h00<br><br>
                <span style="color:#E8820C">Contact / SAV</span><br>
                +225 0700775537 | +225 0564542215
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
const menuBtn = document.getElementById('menuBtn');
const closeMenu = document.getElementById('closeMenu');
const sidebar = document.getElementById('sidebar');
const overlay = document.getElementById('overlay');
menuBtn.onclick = () => { sidebar.style.left = "0"; overlay.classList.remove("hidden"); }
closeMenu.onclick = closeSidebar;
overlay.onclick = closeSidebar;
function closeSidebar(){ sidebar.style.left="-300px"; overlay.classList.add("hidden"); }

function changeQty(btn, val) {
    const qtySpan = btn.parentElement.querySelector('.qty');
    let qty = parseInt(qtySpan.textContent);
    qty = Math.max(1, qty + val);
    qtySpan.textContent = qty;
}

function supprimerArticle(btn) {
    btn.closest('.bg-white').remove();
}
</script>

</body>
</html>

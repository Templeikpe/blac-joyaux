<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pages Légales — Blac Joyaux</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Montserrat', sans-serif;background:#F5ECD7; }
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

<!-- HEADER PAGE -->
<section class="py-10 px-6 text-center" style="background:#3D2314">
    <p class="text-sm font-medium tracking-widest uppercase mb-2" style="color:#E8820C">Informations légales</p>
    <h1 class="text-3xl font-bold text-white">Pages Légales</h1>
</section>

<!-- ONGLETS -->
<section class="bg-white border-b px-6 py-4">
    <div class="max-w-3xl mx-auto flex gap-4">
        <button onclick="showTab('livraison')" id="tab-livraison"
                class="tab-btn px-4 py-2 rounded-full text-sm font-medium border-2 transition-all"
                style="border-color:#3D2314;background:#3D2314;color:#fff">
            Conditions de livraison
        </button>
        <button onclick="showTab('retour')" id="tab-retour"
                class="tab-btn px-4 py-2 rounded-full text-sm font-medium border-2 transition-all"
                style="border-color:#3D2314;color:#3D2314">
            Politique de retour
        </button>
        <button onclick="showTab('mentions')" id="tab-mentions"
                class="tab-btn px-4 py-2 rounded-full text-sm font-medium border-2 transition-all"
                style="border-color:#3D2314;color:#3D2314">
            Mentions légales
        </button>
    </div>
</section>

<!-- CONTENU -->
<section class="py-10 px-6">
    <div class="max-w-3xl mx-auto">

        <!-- CONDITIONS DE LIVRAISON -->
        <div id="content-livraison" class="tab-content bg-white rounded-2xl p-8 shadow-sm">
            <h2 class="text-xl font-bold mb-6" style="color:#3D2314">Conditions de livraison</h2>

            <div class="space-y-6 text-sm text-gray-600 leading-relaxed">
                <div>
                    <h3 class="font-bold mb-2" style="color:#3D2314">Zone de livraison</h3>
                    <p>Blac Joyaux livre uniquement en Côte d'Ivoire. Abidjan est notre zone prioritaire. Les autres villes (Bouaké, Yamoussoukro, San-Pédro...) sont également desservies sous réserve de disponibilité.</p>
                </div>
                <div>
                    <h3 class="font-bold mb-2" style="color:#3D2314">Délais de livraison</h3>
                    <p>Les commandes sont livrées sous <strong>1 à 3 jours ouvrables</strong> à compter de la confirmation de commande.</p>
                    <ul class="mt-2 space-y-1 list-disc list-inside">
                        <li>Abidjan : 1 jour ouvrable</li>
                        <li>Autres villes CI : 2 à 3 jours ouvrables</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-2" style="color:#3D2314">Frais de livraison</h3>
                    <p>La livraison est <strong>gratuite</strong> pour toutes les commandes passées sur notre site.</p>
                </div>
                <div>
                    <h3 class="font-bold mb-2" style="color:#3D2314">Modes de paiement</h3>
                    <ul class="space-y-1 list-disc list-inside">
                        <li>Espèces à la livraison</li>
                        <li>Wave Mobile Money</li>
                        <li>Orange Money</li>
                        <li>MTN MoMo</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-2" style="color:#3D2314">Suivi de commande</h3>
                    <p>Après confirmation de votre commande, vous recevrez un message WhatsApp avec les détails de votre livraison et le contact de notre livreur.</p>
                </div>
            </div>
        </div>

        <!-- POLITIQUE DE RETOUR -->
        <div id="content-retour" class="tab-content hidden bg-white rounded-2xl p-8 shadow-sm">
            <h2 class="text-xl font-bold mb-6" style="color:#3D2314">Politique de retour & remboursement</h2>

            <div class="space-y-6 text-sm text-gray-600 leading-relaxed">
                <div>
                    <h3 class="font-bold mb-2" style="color:#3D2314">Conditions de retour</h3>
                    <p>Vous disposez de <strong>48 heures</strong> après réception de votre commande pour signaler tout problème (produit défectueux, erreur de commande).</p>
                </div>
                <div>
                    <h3 class="font-bold mb-2" style="color:#3D2314">Produits éligibles au retour</h3>
                    <ul class="space-y-1 list-disc list-inside">
                        <li>Produit défectueux à la réception</li>
                        <li>Produit différent de celui commandé</li>
                        <li>Produit endommagé lors de la livraison</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-2" style="color:#3D2314">Produits non éligibles</h3>
                    <ul class="space-y-1 list-disc list-inside">
                        <li>Produit utilisé ou endommagé par le client</li>
                        <li>Retour sans justification valable</li>
                        <li>Demande après 48h de réception</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-2" style="color:#3D2314">Procédure de retour</h3>
                    <p>Contactez-nous via WhatsApp au <strong style="color:#E8820C">+225 07 00 77 55 37</strong> dans les 48h avec une photo du produit et votre numéro de commande.</p>
                </div>
                <div>
                    <h3 class="font-bold mb-2" style="color:#3D2314">Remboursement</h3>
                    <p>En cas de retour accepté, le remboursement sera effectué via le même mode de paiement utilisé lors de l'achat, sous <strong>5 jours ouvrables</strong>.</p>
                </div>
            </div>
        </div>

        <!-- MENTIONS LÉGALES -->
        <div id="content-mentions" class="tab-content hidden bg-white rounded-2xl p-8 shadow-sm">
            <h2 class="text-xl font-bold mb-6" style="color:#3D2314">Mentions légales</h2>

            <div class="space-y-6 text-sm text-gray-600 leading-relaxed">
                <div>
                    <h3 class="font-bold mb-2" style="color:#3D2314">Éditeur du site</h3>
                    <p>Blac Joyaux<br>
                    Fondatrice : Manuela Kouadio<br>
                    Showroom : Cocody Palmeraie, Abidjan, Côte d'Ivoire<br>
                    Contact : +225 07 00 77 55 37</p>
                </div>
                <div>
                    <h3 class="font-bold mb-2" style="color:#3D2314">Propriété intellectuelle</h3>
                    <p>L'ensemble des contenus présents sur ce site (textes, images, logos, visuels) sont la propriété exclusive de Blac Joyaux. Toute reproduction sans autorisation est interdite.</p>
                </div>
                <div>
                    <h3 class="font-bold mb-2" style="color:#3D2314">Protection des données</h3>
                    <p>Les informations collectées lors de vos commandes (nom, téléphone, adresse) sont utilisées uniquement pour le traitement et la livraison de vos commandes. Elles ne sont jamais partagées avec des tiers.</p>
                </div>
                <div>
                    <h3 class="font-bold mb-2" style="color:#3D2314">Contact</h3>
                    <p>Pour toute question légale, contactez-nous à :<br>
                    📧 blacjoyaux@gmail.com<br>
                    📞 +225 07 00 77 55 37</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- FOOTER -->
<footer class="text-white py-12 px-6" style="background:#3D2314">

    <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 text-sm mb-8">

        <!-- Présentation -->
        <div>
            <h3 class="font-bold text-lg mb-4"
                style="font-family:'Playfair Display',serif">
                Blac Joyaux
            </h3>

            <p class="text-gray-300 text-xs leading-relaxed mb-4">
                Nous sommes une marque ivoirienne de maroquinerie qui raconte
                une histoire, celle de la Côte d'Ivoire, de sa résilience,
                de ses traditions africaines.
            </p>

            <p class="text-xs text-gray-400">
                Inscrivez-vous à la newsletter
            </p>

            <div class="flex mt-2">
                <input
                    type="email"
                    placeholder="Saisissez votre e-mail..."
                    class="text-xs px-3 py-2 rounded-l text-gray-800 w-full outline-none">

                <button
                    class="px-3 py-2 rounded-r text-white text-xs"
                    style="background:#E8820C">
                    ›
                </button>
            </div>
        </div>

        <!-- Collections -->
        <div>
            <h4 class="font-semibold mb-4 uppercase text-xs tracking-widest"
                style="color:#E8820C">
                Collections
            </h4>

            <ul class="text-gray-300 space-y-2 text-xs">
                <li>
                    <a href="/collection/do"
                       class="hover:text-orange-400">
                        Dominique
                    </a>
                </li>

                <li>
                    <a href="/collection/do"
                       class="hover:text-orange-400">
                        Ouattara
                    </a>
                </li>

                <li>
                    <a href="/collection/joyau-de-bla"
                       class="hover:text-orange-400">
                        Joyaux de Bla
                    </a>
                </li>
            </ul>
        </div>

        <!-- Support -->
        <div>
            <h4 class="font-semibold mb-4 uppercase text-xs tracking-widest"
                style="color:#E8820C">
                Support
            </h4>

            <ul class="text-gray-300 space-y-2 text-xs">
                <li>
                    <a href="/contact"
                       class="hover:text-orange-400">
                        Contacts
                    </a>
                </li>

                <li>
                    <a href="/actualites"
                       class="hover:text-orange-400">
                        Actualités
                    </a>
                </li>
            </ul>
        </div>

        <!-- Réseaux -->
        <div>
            <h4 class="font-semibold mb-4 uppercase text-xs tracking-widest"
                style="color:#E8820C">
                Réseaux sociaux
            </h4>

            <ul class="text-gray-300 space-y-2 text-xs">

                <li>
                    <a href="https://www.instagram.com/blacjoyaux"
                       class="hover:text-orange-400">
                        📸 Instagram
                    </a>
                </li>

                <li>
                    <a href="https://www.tiktok.com/@blac.joyaux"
                       class="hover:text-orange-400">
                        🎵 TikTok
                    </a>
                </li>

                <li>
                    <a href="https://www.facebook.com/"
                       class="hover:text-orange-400">
                        📘 Facebook
                    </a>
                </li>

                <li>
                    <a href="https://wa.me/2250708771557"
                       class="hover:text-orange-400">
                        💬 WhatsApp
                    </a>
                </li>

            </ul>

            <div class="mt-4">

                <p class="text-xs text-gray-400 mb-1">
                    Showroom Blac Joyaux
                </p>

                <p class="text-xs text-gray-300">
                    Côte d'Ivoire · Commune de Cocody<br>
                    Rond-point de la Riviera Palmeraie
                </p>

                <p class="text-xs text-gray-300 mt-2">
                    Horaire d'ouverture<br>
                    Lundi au samedi, de 09h00 à 18h00
                </p>

                <p class="text-xs mt-2"
                   style="color:#E8820C">
                    Contact / SAV<br>
                    +225 0708771557 · +225 0564542215
                </p>

            </div>
        </div>

    </div>

    <!-- Bas du footer -->
    <div class="border-t border-white/10 pt-6 text-center text-gray-400 text-xs">

        © 2026 Blac Joyaux. Tout droit réservé.

        &nbsp;|&nbsp;

        <a href="/legal"
           class="hover:text-orange-400">
            Confidentialité
        </a>

        &nbsp;|&nbsp;

        <a href="/legal"
           class="hover:text-orange-400">
            Conditions générales
        </a>

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

function showTab(tab) {
    document.querySelectorAll('.tab-content').forEach(c => c.classList.add('hidden'));
    document.querySelectorAll('.tab-btn').forEach(b => {
        b.style.background = 'transparent';
        b.style.color = '#3D2314';
    });
    document.getElementById('content-' + tab).classList.remove('hidden');
    document.getElementById('tab-' + tab).style.background = '#3D2314';
    document.getElementById('tab-' + tab).style.color = '#fff';
}
</script>

</body>
</html>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Blac Joyaux | Showroom et Service Client</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Montserrat', sans-serif; background:#F5ECD7; }
    </style>
</head>
<body>

<!-- HEADER -->
<header class="border-b border-gray-400 bg-white">
    <div class="relative flex items-center justify-between h-16 px-7">
        <button id="menuBtn" class="border border-gray-500 w-9 h-9 flex justify-center items-center hover:bg-gray-100 transition">
            <i class="fas fa-bars"></i>
        </button>
        <a href="/"
   class="absolute left-1/2 -translate-x-1/2 text-4xl font-extrabold text-black"
   style="font-family: Arial, sans-serif;">
    Blac Joyaux
</a>
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

<!-- CONTACT -->
<section class="py-12 px-6" style="background:#F5ECD7">
    <div class="max-w-2xl mx-auto">

        <!-- Icône + titre -->
        <div class="text-center mb-8">
            <div class="w-16 h-16 mx-auto bg-white rounded-full flex items-center justify-center text-3xl mb-3 shadow-sm">
                💬
            </div>
            <h1 class="text-2xl font-bold" style="color:#E8820C">Contact</h1>
        </div>

        <!-- Infos + réseaux -->
        <div class="grid grid-cols-2 gap-3 mb-10">

            <!-- Colonne gauche : infos -->
            <div class="flex flex-col gap-3">
                <div class="bg-white rounded-xl p-4 flex items-start gap-3">
                    <i class="fas fa-house text-lg mt-1" style="color:#3D2314"></i>
                    <div>
                        <p class="font-semibold text-xs mb-1" style="color:#3D2314">Marque</p>
                        <p class="text-xs text-gray-500">Blac Joyaux</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl p-4 flex items-start gap-3">
                    <i class="fas fa-location-dot text-lg mt-1" style="color:#3D2314"></i>
                    <div>
                        <p class="font-semibold text-xs mb-1" style="color:#3D2314">Localisation</p>
                        <p class="text-xs text-gray-500">Côte d'Ivoire - Commune de Cocody<br>Rond-point de la Riviera Palmeraie</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl p-4 flex items-start gap-3">
                    <i class="fas fa-clock text-lg mt-1" style="color:#3D2314"></i>
                    <div>
                        <p class="font-semibold text-xs mb-1" style="color:#3D2314">Horaires</p>
                        <p class="text-xs text-gray-500">Lundi au samedi, de 09h00 à 18h00</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl p-4 flex items-start gap-3">
                    <i class="fas fa-phone text-lg mt-1" style="color:#3D2314"></i>
                    <div>
                        <p class="font-semibold text-xs mb-1" style="color:#3D2314">Telephone</p>
                        <p class="text-xs text-gray-500">+225 0708771557<br>+225 0545452215</p>
                    </div>
                </div>
            </div>

            <!-- Colonne droite : réseaux -->
            <div class="flex flex-col gap-3">
                <a href="https://www.instagram.com/blacjoyaux" target="_blank" class="bg-white rounded-xl p-4 flex items-center gap-3 hover:bg-orange-50 transition">
                    <i class="fab fa-instagram text-lg" style="color:#E1306C"></i>
                    <p class="text-sm font-medium" style="color:#3D2314">Blac Joyaux</p>
                </a>
                <a href="https://www.tiktok.com/@blac.joyaux" target="_blank" class="bg-white rounded-xl p-4 flex items-center gap-3 hover:bg-orange-50 transition">
                    <i class="fab fa-tiktok text-lg" style="color:#000"></i>
                    <p class="text-sm font-medium" style="color:#3D2314">Blac Joyaux</p>
                </a>
                <a href="https://www.facebook.com/share/195mr1hFGy/" target="_blank" class="bg-white rounded-xl p-4 flex items-center gap-3 hover:bg-orange-50 transition">
                    <i class="fab fa-facebook" style="color:#1877F2"></i>
                    <p class="text-sm font-medium" style="color:#3D2314">Blac Joyaux</p>
                </a>
                <a href="https://wa.me/2250708771557" target="_blank" class="bg-white rounded-xl p-4 flex items-center gap-3 hover:bg-orange-50 transition">
                    <i class="fab fa-whatsapp text-lg" style="color:#25D366"></i>
                    <p class="text-sm font-medium" style="color:#3D2314">Discutez sur Whatsapp</p>
                </a>
            </div>

        </div>

        <!-- Formulaire -->
        <div>
            <h2 class="text-lg font-bold mb-6" style="color:#3D2314">Laissez-nous un message</h2>

            <div class="space-y-4">
                <div>
                    <label class="text-xs font-medium mb-1 block" style="color:#3D2314">Nom et Prenoms</label>
                    <input type="text" id="contactNom" placeholder="Tapez ici..."
                           class="w-full px-4 py-3 rounded-xl border border-gray-800 text-sm outline-none focus:border-orange-400"
                           style="background:#F5ECD7">
                </div>
                <div>
                    <label class="text-xs font-medium mb-1 block" style="color:#3D2314">Adresse mail</label>
                    <input type="email" id="contactEmail" placeholder="Tapez ici..."
                           class="w-full px-4 py-3 rounded-xl border border-gray-800 text-sm outline-none focus:border-orange-400"
                           style="background:#F5ECD7">
                </div>
                <div>
                    <label class="text-xs font-medium mb-1 block" style="color:#3D2314">Message</label>
                    <textarea id="contactMessage" placeholder="Entrez votre message ici..."
                              rows="6"
                              class="w-full px-4 py-3 rounded-xl border border-gray-800 text-sm outline-none focus:border-orange-400 resize-none"
                              style="background:#F5ECD7"></textarea>
                </div>
                <button type="button" onclick="envoyerContactWhatsapp()"
                        class="w-full text-white font-semibold py-4 rounded-xl text-sm hover:opacity-90 transition"
                        style="background:#3D2314">
                    Envoyer
                </button>
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

const NUMERO_WHATSAPP_CONTACT = '2250708771557';

function envoyerContactWhatsapp() {
    const nom = document.getElementById('contactNom').value.trim();
    const email = document.getElementById('contactEmail').value.trim();
    const message = document.getElementById('contactMessage').value.trim();

    if (!nom || !message) {
        alert('Merci de renseigner au moins votre nom et votre message avant d\'envoyer.');
        return;
    }

    let lignes = [];
    lignes.push('Bonjour, je vous contacte depuis le site Blac Joyaux au sujet d\'une préoccupation :');
    lignes.push('');
    lignes.push(`Nom : ${nom}`);
    if (email) lignes.push(`E-mail : ${email}`);
    lignes.push('');
    lignes.push(`Message : ${message}`);

    const texte = encodeURIComponent(lignes.join('\n'));
    const lien = `https://wa.me/${NUMERO_WHATSAPP_CONTACT}?text=${texte}`;
    window.open(lien, '_blank');
}
</script>

</body>
</html>

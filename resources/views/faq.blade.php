<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ — Blac Joyaux</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background:#F5ECD7; }
        details summary::-webkit-details-marker { display: none; }
        details[open] summary span { transform: rotate(45deg); }
        details summary span { transition: transform 0.3s ease; display: inline-block; }
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

<!-- HERO -->
<section class="py-10 px-6 text-center" style="background:#3D2314">
    <p class="text-sm font-medium tracking-widest uppercase mb-2" style="color:#E8820C">Aide & Support</p>
    <h1 class="text-3xl font-bold text-white mb-3">Questions Fréquentes</h1>
    <p class="text-gray-300 text-sm max-w-lg mx-auto">Trouvez rapidement les réponses à vos questions sur nos produits, livraisons et paiements.</p>
</section>

<!-- FAQ -->
<section class="py-12 px-6">
    <div class="max-w-3xl mx-auto">

        <!-- Catégorie 1 : Commande & Produits -->
        <h2 class="font-bold text-lg mb-4" style="color:#3D2314">🛍️ Commande & Produits</h2>
        <div class="space-y-3 mb-10">

            <details class="bg-white rounded-xl px-6 py-4 cursor-pointer shadow-sm">
                <summary class="font-semibold text-sm flex justify-between items-center" style="color:#3D2314">
                    Où acheter Blac Joyaux ?
                    <span style="color:#E8820C">+</span>
                </summary>
                <p class="text-gray-500 text-xs mt-3 leading-relaxed">
                    Vous pouvez acheter directement sur notre site blacjoyaux.com ou visiter notre showroom à Cocody Palmeraie, Abidjan. Nous livrons partout en Côte d'Ivoire.
                </p>
            </details>

            <details class="bg-white rounded-xl px-6 py-4 cursor-pointer shadow-sm">
                <summary class="font-semibold text-sm flex justify-between items-center" style="color:#3D2314">
                    Les sacs sont-ils fabriqués en Côte d'Ivoire ?
                    <span style="color:#E8820C">+</span>
                </summary>
                <p class="text-gray-500 text-xs mt-3 leading-relaxed">
                    Oui, tous nos sacs sont fabriqués artisanalement à Abidjan par un artisan ivoirien talentueux basé à Adjamé. 100% Made in CI.
                </p>
            </details>

            <details class="bg-white rounded-xl px-6 py-4 cursor-pointer shadow-sm">
                <summary class="font-semibold text-sm flex justify-between items-center" style="color:#3D2314">
                    Quel sac offrir à une jeune cadre ?
                    <span style="color:#E8820C">+</span>
                </summary>
                <p class="text-gray-500 text-xs mt-3 leading-relaxed">
                    Nous recommandons le sac <strong>Akwaba</strong> de la Capsule 2026 (sac de bureau, 85 000 FCFA) ou le sac <strong>Joyau de Bla Noir</strong> (50 000 FCFA). Les deux sont élégants et adaptés au quotidien professionnel.
                </p>
            </details>

            <details class="bg-white rounded-xl px-6 py-4 cursor-pointer shadow-sm">
                <summary class="font-semibold text-sm flex justify-between items-center" style="color:#3D2314">
                    Quelles sont les tailles disponibles ?
                    <span style="color:#E8820C">+</span>
                </summary>
                <p class="text-gray-500 text-xs mt-3 leading-relaxed">
                    Chaque sac a ses propres dimensions indiquées sur la fiche produit. En général nos sacs varient entre 20×15 cm (mini) et 35×28 cm (sac de bureau).
                </p>
            </details>

            <details class="bg-white rounded-xl px-6 py-4 cursor-pointer shadow-sm">
                <summary class="font-semibold text-sm flex justify-between items-center" style="color:#3D2314">
                    Puis-je personnaliser mon sac ?
                    <span style="color:#E8820C">+</span>
                </summary>
                <p class="text-gray-500 text-xs mt-3 leading-relaxed">
                    Pour toute demande de personnalisation, contactez-nous directement via WhatsApp au +225 07 00 77 55 37. Nos artisans étudieront votre demande.
                </p>
            </details>

        </div>

        <!-- Catégorie 2 : Livraison -->
        <h2 class="font-bold text-lg mb-4" style="color:#3D2314">🚚 Livraison</h2>
        <div class="space-y-3 mb-10">

            <details class="bg-white rounded-xl px-6 py-4 cursor-pointer shadow-sm">
                <summary class="font-semibold text-sm flex justify-between items-center" style="color:#3D2314">
                    Quels sont les délais de livraison ?
                    <span style="color:#E8820C">+</span>
                </summary>
                <p class="text-gray-500 text-xs mt-3 leading-relaxed">
                    La livraison est effectuée sous <strong>1 à 3 jours ouvrables</strong> à Abidjan et dans les principales villes de Côte d'Ivoire.
                </p>
            </details>

            <details class="bg-white rounded-xl px-6 py-4 cursor-pointer shadow-sm">
                <summary class="font-semibold text-sm flex justify-between items-center" style="color:#3D2314">
                    La livraison est-elle gratuite ?
                    <span style="color:#E8820C">+</span>
                </summary>
                <p class="text-gray-500 text-xs mt-3 leading-relaxed">
                    Oui, la livraison est <strong>gratuite</strong> pour toutes les commandes passées sur notre site, partout en Côte d'Ivoire.
                </p>
            </details>

            <details class="bg-white rounded-xl px-6 py-4 cursor-pointer shadow-sm">
                <summary class="font-semibold text-sm flex justify-between items-center" style="color:#3D2314">
                    Livrez-vous en dehors de la Côte d'Ivoire ?
                    <span style="color:#E8820C">+</span>
                </summary>
                <p class="text-gray-500 text-xs mt-3 leading-relaxed">
                    Pour le moment, nous livrons uniquement en Côte d'Ivoire avec Abidjan comme zone prioritaire. La livraison internationale est en cours de développement.
                </p>
            </details>

            <details class="bg-white rounded-xl px-6 py-4 cursor-pointer shadow-sm">
                <summary class="font-semibold text-sm flex justify-between items-center" style="color:#3D2314">
                    Comment suivre ma commande ?
                    <span style="color:#E8820C">+</span>
                </summary>
                <p class="text-gray-500 text-xs mt-3 leading-relaxed">
                    Après confirmation de votre commande, vous recevrez un message WhatsApp avec les informations de suivi et le contact de notre livreur.
                </p>
            </details>

        </div>

        <!-- Catégorie 3 : Paiement -->
        <h2 class="font-bold text-lg mb-4" style="color:#3D2314">💳 Paiement</h2>
        <div class="space-y-3 mb-10">

            <details class="bg-white rounded-xl px-6 py-4 cursor-pointer shadow-sm">
                <summary class="font-semibold text-sm flex justify-between items-center" style="color:#3D2314">
                    Quels moyens de paiement sont acceptés ?
                    <span style="color:#E8820C">+</span>
                </summary>
                <p class="text-gray-500 text-xs mt-3 leading-relaxed">
                    Nous acceptons : <strong>Espèces à la livraison</strong>, <strong>Wave</strong>, <strong>Orange Money</strong> et <strong>MTN MoMo</strong>.
                </p>
            </details>

            <details class="bg-white rounded-xl px-6 py-4 cursor-pointer shadow-sm">
                <summary class="font-semibold text-sm flex justify-between items-center" style="color:#3D2314">
                    Le paiement en ligne est-il sécurisé ?
                    <span style="color:#E8820C">+</span>
                </summary>
                <p class="text-gray-500 text-xs mt-3 leading-relaxed">
                    Oui. Tous nos paiements Mobile Money sont traités directement via les applications officielles Wave, Orange Money et MTN MoMo. Nous ne stockons aucune information bancaire.
                </p>
            </details>

            <details class="bg-white rounded-xl px-6 py-4 cursor-pointer shadow-sm">
                <summary class="font-semibold text-sm flex justify-between items-center" style="color:#3D2314">
                    Puis-je payer en plusieurs fois ?
                    <span style="color:#E8820C">+</span>
                </summary>
                <p class="text-gray-500 text-xs mt-3 leading-relaxed">
                    Le paiement en plusieurs fois n'est pas disponible pour le moment. Contactez-nous via WhatsApp pour tout arrangement spécial.
                </p>
            </details>

        </div>

        <!-- Catégorie 4 : Retours -->
        <h2 class="font-bold text-lg mb-4" style="color:#3D2314">↩️ Retours & Échanges</h2>
        <div class="space-y-3 mb-10">

            <details class="bg-white rounded-xl px-6 py-4 cursor-pointer shadow-sm">
                <summary class="font-semibold text-sm flex justify-between items-center" style="color:#3D2314">
                    Comment retourner un article ?
                    <span style="color:#E8820C">+</span>
                </summary>
                <p class="text-gray-500 text-xs mt-3 leading-relaxed">
                    Contactez-nous dans les <strong>48h</strong> suivant la réception via WhatsApp avec une photo du produit et votre numéro de commande.
                </p>
            </details>

            <details class="bg-white rounded-xl px-6 py-4 cursor-pointer shadow-sm">
                <summary class="font-semibold text-sm flex justify-between items-center" style="color:#3D2314">
                    Comment entretenir mon sac Blac Joyaux ?
                    <span style="color:#E8820C">+</span>
                </summary>
                <p class="text-gray-500 text-xs mt-3 leading-relaxed">
                    Nettoyez avec un chiffon doux et sec. Évitez l'humidité et l'exposition prolongée au soleil. Rangez dans la housse fournie quand il n'est pas utilisé.
                </p>
            </details>

        </div>

        <!-- CTA Contact -->
        <div class="bg-white rounded-2xl p-8 text-center shadow-sm">
            <p class="text-2xl mb-3">💬</p>
            <h3 class="font-bold mb-2" style="color:#3D2314">Vous n'avez pas trouvé votre réponse ?</h3>
            <p class="text-xs text-gray-500 mb-6">Notre équipe est disponible pour vous aider du lundi au samedi de 09h00 à 18h00.</p>
            <div class="flex flex-col sm:flex-row gap-3 justify-center">
                <a href="https://wa.me/2250700775537" target="_blank"
                   class="text-white font-semibold px-6 py-3 rounded-xl text-sm" style="background:#25D366">
                    💬 Nous contacter sur WhatsApp
                </a>
                <a href="/contact"
                   class="font-semibold px-6 py-3 rounded-xl text-sm border-2" style="border-color:#3D2314;color:#3D2314">
                    📧 Formulaire de contact
                </a>
            </div>
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
                <li><a href="/capsule" class="hover:text-orange-400">Capsule 2026</a></li>
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
        © 2026 Blac Joyaux. Tout droit réservé. &nbsp;|&nbsp;
        <a href="/legal" class="hover:text-orange-400">Confidentialité</a> &nbsp;|&nbsp;
        <a href="/legal" class="hover:text-orange-400">Conditions générales</a>
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
</script>

</body>
</html>

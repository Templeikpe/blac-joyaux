<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande — Blac Joyaux</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background:#F5ECD7; }
        .etape { transition: all 0.3s ease; }
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

<!-- ÉTAPES -->
<section class="py-6 px-6 bg-white border-b">
    <div class="max-w-3xl mx-auto flex items-center justify-center gap-4">
        <div class="flex items-center gap-2">
            <span class="w-7 h-7 rounded-full text-white text-xs flex items-center justify-center font-bold" style="background:#3D2314">1</span>
            <span class="text-xs font-semibold" style="color:#3D2314">Informations</span>
        </div>
        <div class="h-px w-8 bg-gray-300"></div>
        <div class="flex items-center gap-2">
            <span class="w-7 h-7 rounded-full text-white text-xs flex items-center justify-center font-bold" style="background:#E8820C">2</span>
            <span class="text-xs font-semibold" style="color:#E8820C">Paiement</span>
        </div>
        <div class="h-px w-8 bg-gray-300"></div>
        <div class="flex items-center gap-2">
            <span class="w-7 h-7 rounded-full bg-gray-300 text-gray-500 text-xs flex items-center justify-center font-bold">3</span>
            <span class="text-xs text-gray-400">Confirmation</span>
        </div>
    </div>
</section>

<!-- CHECKOUT -->
<section class="py-10 px-6">
    <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">

        <!-- FORMULAIRE -->
        <div>
            <h2 class="font-bold text-lg mb-6" style="color:#3D2314">Informations de livraison</h2>

            <form id="formCommande" class="space-y-4" onsubmit="return false;">
                <div>
                    <label class="text-xs font-medium mb-1 block" style="color:#3D2314">Nom et prénom *</label>
                    <input type="text" id="nomComplet" required placeholder="Ex : Aya Kouassi"
                           class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm outline-none focus:border-orange-400 bg-white">
                </div>

                <div>
                    <label class="text-xs font-medium mb-1 block" style="color:#3D2314">Numéro de téléphone *</label>
                    <div class="flex gap-2">
                        <select id="indicatif" class="px-3 py-3 rounded-xl border border-gray-200 text-sm outline-none bg-white">
                            <option value="+225">🇨🇮 +225</option>
                            <option value="+221">🇸🇳 +221</option>
                            <option value="+223">🇲🇱 +223</option>
                            <option value="+226">🇧🇫 +226</option>
                            <option value="+228">🇹🇬 +228</option>
                            <option value="+229">🇧🇯 +229</option>
                            <option value="+33">🇫🇷 +33</option>
                            <option value="+1">🇺🇸/🇨🇦 +1</option>
                        </select>
                        <input type="tel" id="telephone" required placeholder="07 00 00 00 00" maxlength="10" inputmode="numeric"
                               class="flex-1 px-4 py-3 rounded-xl border border-gray-200 text-sm outline-none focus:border-orange-400 bg-white">
                    </div>
                    <p id="telephone-erreur" class="hidden text-xs text-red-500 mt-1">Le numéro doit contenir exactement 10 chiffres.</p>
                </div>

                <div>
                    <label class="text-xs font-medium mb-1 block" style="color:#3D2314">Adresse de livraison *</label>
                    <input type="text" id="adresse" required placeholder="Quartier, commune, ville..."
                           class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm outline-none focus:border-orange-400 bg-white">
                </div>

                <!-- MODE PAIEMENT -->
                <div>
                    <label class="text-xs font-medium mb-3 block" style="color:#3D2314">Mode de paiement</label>
                    <div class="space-y-3">
                        <label class="flex items-center gap-3 bg-white rounded-xl p-4 cursor-pointer border-2 hover:border-orange-400 transition" style="border-color:#3D2314">
                            <input type="radio" name="paiement" value="Espèces à la livraison" checked class="accent-orange-600">
                            <div>
                                <p class="text-sm font-semibold" style="color:#3D2314">💵 Espèces à la livraison</p>
                                <p class="text-xs text-gray-400">Payez en cash à la réception</p>
                            </div>
                        </label>
                        <label class="flex items-center gap-3 bg-white rounded-xl p-4 cursor-pointer border-2 border-gray-200 hover:border-orange-400 transition">
                            <input type="radio" name="paiement" value="Wave" class="accent-orange-600">
                            <div>
                                <p class="text-sm font-semibold" style="color:#3D2314">📱 Wave</p>
                                <p class="text-xs text-gray-400">Paiement Mobile Money Wave</p>
                            </div>
                        </label>
                        <label class="flex items-center gap-3 bg-white rounded-xl p-4 cursor-pointer border-2 border-gray-200 hover:border-orange-400 transition">
                            <input type="radio" name="paiement" value="Orange Money" class="accent-orange-600">
                            <div>
                                <p class="text-sm font-semibold" style="color:#3D2314">🟠 Orange Money</p>
                                <p class="text-xs text-gray-400">Paiement Mobile Money Orange</p>
                            </div>
                        </label>
                        <label class="flex items-center gap-3 bg-white rounded-xl p-4 cursor-pointer border-2 border-gray-200 hover:border-orange-400 transition">
                            <input type="radio" name="paiement" value="MTN MoMo" class="accent-orange-600">
                            <div>
                                <p class="text-sm font-semibold" style="color:#3D2314">💛 MTN MoMo</p>
                                <p class="text-xs text-gray-400">Paiement Mobile Money MTN</p>
                            </div>
                        </label>
                    </div>
                </div>
            </form>
        </div>

        <!-- RÉCAPITULATIF -->
        <div>
            <h2 class="font-bold text-lg mb-6" style="color:#3D2314">Récapitulatif</h2>

            <div id="recap-items" class="bg-white rounded-2xl p-4 shadow-sm mb-4">
                <!-- injecté par JS -->
            </div>

            <div class="bg-white rounded-2xl p-4 shadow-sm mb-6">
                <div class="space-y-3 text-sm">
                    <div class="flex justify-between">
                        <span class="text-gray-500">Sous-total</span>
                        <span id="recap-sous-total" style="color:#3D2314">0 FCFA</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Livraison</span>
                        <span style="color:#E8820C">Gratuite</span>
                    </div>
                    <div class="border-t pt-3 flex justify-between">
                        <span class="font-bold" style="color:#3D2314">Total</span>
                        <span id="recap-total" class="font-bold text-lg" style="color:#3D2314">0 FCFA</span>
                    </div>
                </div>
            </div>

            <button type="button" onclick="confirmerCommande()" id="btnConfirmer"
                    class="w-full text-white font-semibold py-4 rounded-xl text-sm hover:opacity-90 transition mb-3"
                    style="background:#3D2314">
                ✅ Confirmer ma commande
            </button>

            <p class="text-xs text-gray-400 text-center">
                Votre commande sera enregistrée. Vous pourrez ensuite, si vous le souhaitez, la finaliser aussi sur WhatsApp.
            </p>
        </div>

    </div>
</section>

<!-- PAGE CONFIRMATION -->
<div id="confirmation" class="hidden fixed inset-0 bg-black/50 z-50 flex items-center justify-center px-6">
    <div class="bg-white rounded-2xl p-8 max-w-md w-full text-center shadow-2xl">
        <div class="text-6xl mb-4">✅</div>
        <h2 class="text-2xl font-bold mb-3" style="color:#3D2314">Commande enregistrée !</h2>
        <p class="text-gray-500 text-sm mb-2">Numéro de commande : <span id="confirmation-numero" class="font-bold" style="color:#E8820C">#BJ2026001</span></p>
        <p class="text-gray-500 text-sm mb-6">Votre commande a bien été enregistrée. Vous serez contacté(e) sous peu pour la livraison.</p>

        <div class="border-t pt-5 mt-2">
            <p class="text-xs text-gray-400 mb-3">Vous préférez suivre votre commande sur WhatsApp ?</p>
            <a id="confirmation-whatsapp"
               href="#" target="_blank"
               class="block text-white font-semibold py-3 rounded-xl text-sm mb-3"
               style="background:#25D366">
                💬 Continuer sur WhatsApp
            </a>
        </div>

        <a href="/" class="block text-sm font-medium py-3 rounded-xl border-2 mt-2" style="border-color:#3D2314;color:#3D2314">
            Retour à l'accueil
        </a>
    </div>
</div>

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

const NUMERO_WHATSAPP = '2250708771557';

function getPanier() {
    try {
        return JSON.parse(localStorage.getItem('panier')) || [];
    } catch (e) {
        return [];
    }
}

function afficherRecap() {
    const panier = getPanier();
    const recapItems = document.getElementById('recap-items');

    if (panier.length === 0) {
        recapItems.innerHTML = '<p class="text-sm text-gray-400 text-center py-4">Votre panier est vide.</p>';
        document.getElementById('recap-sous-total').textContent = '0 FCFA';
        document.getElementById('recap-total').textContent = '0 FCFA';
        return 0;
    }

    let total = 0;
    let html = '';

    panier.forEach((item, index) => {
        const sousTotal = item.prix * item.qty;
        total += sousTotal;
        const bordure = index < panier.length - 1 ? 'mb-3 pb-3 border-b' : '';
        html += `
            <div class="flex items-center gap-3 ${bordure}">
                <img src="${item.img}" alt="${item.nom}" class="w-14 h-14 object-cover rounded-xl">
                <div class="flex-1">
                    <p class="text-xs font-semibold" style="color:#3D2314">${item.nom}</p>
                    <p class="text-xs text-gray-400">${item.collection || ''} · Qté : ${item.qty}</p>
                </div>
                <p class="font-bold text-sm" style="color:#3D2314">${sousTotal.toLocaleString('fr-FR')} FCFA</p>
            </div>
        `;
    });

    recapItems.innerHTML = html;
    document.getElementById('recap-sous-total').textContent = total.toLocaleString('fr-FR') + ' FCFA';
    document.getElementById('recap-total').textContent = total.toLocaleString('fr-FR') + ' FCFA';

    return total;
}

// Affiche le récapitulatif dès le chargement de la page
afficherRecap();

function genererNumeroCommande() {
    const commandes = JSON.parse(localStorage.getItem('commandes') || '[]');
    const numero = commandes.length + 1;
    const annee = new Date().getFullYear();
    return '#BJ' + annee + String(numero).padStart(3, '0');
}

// ---- Construit le message WhatsApp complet : infos client + articles + total ----
function construireMessageWhatsapp(commande) {
    let lignes = [];
    lignes.push(`Bonjour, je souhaite passer la commande ${commande.numero} sur Blac Joyaux.`);
    lignes.push('');
    lignes.push('*Mes informations*');
    lignes.push(`Nom : ${commande.client}`);
    lignes.push(`Téléphone : ${commande.telephone}`);
    lignes.push(`Adresse : ${commande.adresse}`);
    lignes.push(`Moyen de paiement : ${commande.paiement}`);
    lignes.push('');
    lignes.push('*Articles commandés*');
    commande.produits.forEach(item => {
        const sousTotal = item.prix * item.qty;
        lignes.push(`- ${item.nom} x${item.qty} = ${sousTotal.toLocaleString('fr-FR')} FCFA`);
    });
    lignes.push('');
    lignes.push(`*Total : ${commande.total.toLocaleString('fr-FR')} FCFA*`);
    return lignes.join('\n');
}

function telephoneValide(numero) {
    return /^[0-9]{10}$/.test(numero);
}

async function confirmerCommande() {
    const panier = getPanier();

    if (panier.length === 0) {
        alert('Votre panier est vide. Ajoutez un produit avant de commander.');
        return;
    }

    const nomComplet = document.getElementById('nomComplet').value.trim();
    const indicatif = document.getElementById('indicatif').value;
    const telephoneBrut = document.getElementById('telephone').value.trim().replace(/\s+/g, '');
    const adresse = document.getElementById('adresse').value.trim();

    document.getElementById('telephone-erreur').classList.add('hidden');

    if (!nomComplet || !telephoneBrut || !adresse) {
        alert('Merci de remplir votre nom, votre téléphone et votre adresse avant de confirmer.');
        return;
    }

    if (!telephoneValide(telephoneBrut)) {
        document.getElementById('telephone-erreur').classList.remove('hidden');
        document.getElementById('telephone').focus();
        return;
    }

    const telephoneComplet = indicatif + ' ' + telephoneBrut;
    const paiement = document.querySelector('input[name="paiement"]:checked').value;
    const total = afficherRecap();

    const boutonConfirmer = document.getElementById('btnConfirmer');
    boutonConfirmer.disabled = true;
    boutonConfirmer.textContent = 'Envoi en cours...';

    let numero = null;

    try {
        const reponse = await fetch('{{ route("commande.store") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            },
            body: JSON.stringify({
                nom_complet: nomComplet,
                telephone: telephoneComplet,
                adresse: adresse,
                paiement: paiement,
                produits: panier,
                total: total,
            }),
        });

        if (!reponse.ok) {
            const erreurJson = await reponse.json().catch(() => null);
            const message = erreurJson && erreurJson.message ? erreurJson.message : 'Erreur serveur, réessayez.';
            throw new Error(message);
        }

        const data = await reponse.json();
        numero = data.numero;
    } catch (erreur) {
        alert('Impossible d\'enregistrer votre commande : ' + erreur.message + '. Vérifiez vos informations et réessayez.');
        boutonConfirmer.disabled = false;
        boutonConfirmer.textContent = '✅ Confirmer ma commande';
        return;
    }

    const commande = {
        numero: numero,
        client: nomComplet,
        telephone: telephoneComplet,
        adresse: adresse,
        paiement: paiement,
        produits: panier,
        total: total,
    };

    // Message WhatsApp prêt, mais PAS ouvert automatiquement —
    // seulement disponible via le bouton "Continuer sur WhatsApp" dans la confirmation.
    const message = construireMessageWhatsapp(commande);
    const lienWhatsapp = `https://wa.me/${NUMERO_WHATSAPP}?text=${encodeURIComponent(message)}`;

    // Vide le panier et affiche la confirmation
    localStorage.removeItem('panier');

    document.getElementById('confirmation-numero').textContent = numero;
    document.getElementById('confirmation-whatsapp').href = lienWhatsapp;
    document.getElementById('confirmation').classList.remove('hidden');

    boutonConfirmer.disabled = false;
    boutonConfirmer.textContent = '✅ Confirmer ma commande';
}
</script>

</body>
</html>

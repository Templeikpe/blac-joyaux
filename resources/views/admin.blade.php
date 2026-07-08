<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration — Blac Joyaux</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background:#F5ECD7; }
        .stat-card { transition: all 0.3s ease; }
        .stat-card:hover { transform: translateY(-2px); }
    </style>
</head>
<body>

<!-- LOGIN (affiché par défaut) -->
<div id="login-page" class="min-h-screen flex items-center justify-center px-6" style="background:#3D2314">
    <div class="bg-white rounded-2xl p-8 w-full max-w-md shadow-2xl">
        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold mb-2" style="color:#3D2314">Blac Joyaux</h1>
            <p class="text-sm text-gray-500">Administration — Accès réservé</p>
        </div>

        <div class="space-y-4">
            <div>
                <label class="text-xs font-medium mb-1 block" style="color:#3D2314">Email administrateur</label>
                <input type="email" id="login-email" placeholder="admin@blacjoyaux.com"
                       class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm outline-none focus:border-orange-400">
            </div>
            <div>
                <label class="text-xs font-medium mb-1 block" style="color:#3D2314">Mot de passe</label>
                <input type="password" id="login-password" placeholder="••••••••"
                       class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm outline-none focus:border-orange-400">
            </div>
            <p id="login-error" class="text-red-500 text-xs hidden">Email ou mot de passe incorrect.</p>
            <button onclick="login()"
                    class="w-full text-white font-semibold py-4 rounded-xl text-sm hover:opacity-90 transition"
                    style="background:#3D2314">
                Se connecter
            </button>
        </div>

        <p class="text-center text-xs text-gray-400 mt-6">
            <a href="/" class="hover:underline" style="color:#E8820C">← Retour au site</a>
        </p>
    </div>
</div>

<!-- DASHBOARD (caché par défaut) -->
<div id="dashboard" class="hidden">

    <!-- SIDEBAR -->
    <div class="flex min-h-screen">
        <aside class="w-64 text-white flex flex-col fixed h-full z-40" style="background:#3D2314">
            <div class="p-6 border-b border-white/10">
                <h1 class="font-bold text-lg">Blac Joyaux</h1>
                <p class="text-xs text-gray-400 mt-1">Administration</p>
            </div>
            <nav class="flex-1 p-4 space-y-2">
                <button onclick="showSection('tableau-bord')" class="nav-btn w-full text-left px-4 py-3 rounded-xl text-sm font-medium flex items-center gap-3 hover:bg-white/10 transition actif" style="background:rgba(255,255,255,0.15)">
                    <i class="fas fa-chart-bar"></i> Tableau de bord
                </button>
                <button onclick="showSection('produits')" class="nav-btn w-full text-left px-4 py-3 rounded-xl text-sm font-medium flex items-center gap-3 hover:bg-white/10 transition">
                    <i class="fas fa-shopping-bag"></i> Produits
                </button>
                <button onclick="showSection('commandes')" class="nav-btn w-full text-left px-4 py-3 rounded-xl text-sm font-medium flex items-center gap-3 hover:bg-white/10 transition">
                    <i class="fas fa-box"></i> Commandes
                </button>
                <button onclick="showSection('collections')" class="nav-btn w-full text-left px-4 py-3 rounded-xl text-sm font-medium flex items-center gap-3 hover:bg-white/10 transition">
                    <i class="fas fa-layer-group"></i> Collections
                </button>
                <button onclick="showSection('faq')" class="nav-btn w-full text-left px-4 py-3 rounded-xl text-sm font-medium flex items-center gap-3 hover:bg-white/10 transition">
                    <i class="fas fa-question-circle"></i> FAQ
                </button>
                <button onclick="showSection('parametres')" class="nav-btn w-full text-left px-4 py-3 rounded-xl text-sm font-medium flex items-center gap-3 hover:bg-white/10 transition">
                    <i class="fas fa-cog"></i> Paramètres
                </button>
            </nav>
            <div class="p-4 border-t border-white/10">
                <button onclick="logout()" class="w-full text-left px-4 py-3 rounded-xl text-sm flex items-center gap-3 hover:bg-white/10 transition text-gray-300">
                    <i class="fas fa-sign-out-alt"></i> Déconnexion
                </button>
                <a href="/" class="w-full text-left px-4 py-3 rounded-xl text-sm flex items-center gap-3 hover:bg-white/10 transition text-gray-300 mt-1">
                    <i class="fas fa-external-link-alt"></i> Voir le site
                </a>
            </div>
        </aside>

        <!-- CONTENU PRINCIPAL -->
        <main class="ml-64 flex-1 p-8">

            <!-- TABLEAU DE BORD -->
            <div id="section-tableau-bord" class="section-content">
                <h2 class="text-2xl font-bold mb-8" style="color:#3D2314">Tableau de bord</h2>

                <!-- Stats -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-8">
                    <div class="stat-card bg-white rounded-2xl p-6 shadow-sm text-center">
                        <p id="stat-produits" class="text-3xl font-bold mb-1" style="color:#3D2314">0</p>
                        <p class="text-xs text-gray-500">Produits</p>
                    </div>
                    <div class="stat-card bg-white rounded-2xl p-6 shadow-sm text-center">
                        <p id="stat-commandes" class="text-3xl font-bold mb-1" style="color:#E8820C">0</p>
                        <p class="text-xs text-gray-500">Commandes</p>
                    </div>
                    <div class="stat-card bg-white rounded-2xl p-6 shadow-sm text-center">
                        <p id="stat-total" class="text-3xl font-bold mb-1" style="color:#3D2314">0</p>
                        <p class="text-xs text-gray-500">FCFA total</p>
                    </div>
                    <div class="stat-card bg-white rounded-2xl p-6 shadow-sm text-center">
                        <p id="stat-collections" class="text-3xl font-bold mb-1" style="color:#E8820C">3</p>
                        <p class="text-xs text-gray-500">Collections</p>
                    </div>
                </div>

                <!-- Dernières commandes -->
                <div class="bg-white rounded-2xl p-6 shadow-sm">
                    <h3 class="font-bold mb-4" style="color:#3D2314">Dernières commandes</h3>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="border-b">
                                    <th class="text-left py-3 px-4 text-xs text-gray-500">N° Commande</th>
                                    <th class="text-left py-3 px-4 text-xs text-gray-500">Client</th>
                                    <th class="text-left py-3 px-4 text-xs text-gray-500">Produit</th>
                                    <th class="text-left py-3 px-4 text-xs text-gray-500">Total</th>
                                    <th class="text-left py-3 px-4 text-xs text-gray-500">Statut</th>
                                </tr>
                            </thead>
                            <tbody id="dernieres-commandes-body">
                                <!-- injecté par JS -->
                            </tbody>
                        </table>
                        <p id="dernieres-commandes-vide" class="hidden text-center text-xs text-gray-400 py-8">
                            Aucune commande pour le moment. Les commandes apparaîtront ici dès qu'un client validera son achat.
                        </p>
                    </div>
                </div>
            </div>

            <!-- PRODUITS -->
            <div id="section-produits" class="section-content hidden">
                <h2 class="text-2xl font-bold mb-8" style="color:#3D2314">Gestion des produits</h2>
                <div class="bg-white rounded-2xl p-12 shadow-sm text-center">
                    <p class="text-gray-500 text-sm">Cette section n'est pas utilisée.</p>
                </div>
            </div>

            <!-- COMMANDES : historique complet -->
            <div id="section-commandes" class="section-content hidden">
                <h2 class="text-2xl font-bold mb-8" style="color:#3D2314">Historique des commandes</h2>

                <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="border-b bg-gray-50">
                                    <th class="text-left py-4 px-6 text-xs text-gray-500">N° Commande</th>
                                    <th class="text-left py-4 px-6 text-xs text-gray-500">Client</th>
                                    <th class="text-left py-4 px-6 text-xs text-gray-500">Téléphone</th>
                                    <th class="text-left py-4 px-6 text-xs text-gray-500">Total</th>
                                    <th class="text-left py-4 px-6 text-xs text-gray-500">Paiement</th>
                                    <th class="text-left py-4 px-6 text-xs text-gray-500">Statut</th>
                                    <th class="text-left py-4 px-6 text-xs text-gray-500">Action</th>
                                </tr>
                            </thead>
                            <tbody id="commandes-body">
                                <!-- injecté par JS -->
                            </tbody>
                        </table>
                        <p id="commandes-vide" class="hidden text-center text-xs text-gray-400 py-10">
                            Aucune commande pour le moment. L'historique apparaîtra ici dès qu'un client validera une commande.
                        </p>
                    </div>
                </div>

                <!-- Détail au clic sur une ligne -->
                <div id="commande-detail" class="hidden mt-6 bg-white rounded-2xl p-6 shadow-sm">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="font-bold" style="color:#3D2314">Détail de la commande <span id="detail-numero" style="color:#E8820C"></span></h3>
                        <button onclick="document.getElementById('commande-detail').classList.add('hidden')" class="text-gray-400 hover:text-gray-600">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm mb-4">
                        <div>
                            <p class="text-xs text-gray-400 mb-1">Client</p>
                            <p style="color:#3D2314" id="detail-client"></p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400 mb-1">Téléphone</p>
                            <p style="color:#3D2314" id="detail-telephone"></p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400 mb-1">E-mail</p>
                            <p style="color:#3D2314" id="detail-email"></p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400 mb-1">Adresse</p>
                            <p style="color:#3D2314" id="detail-adresse"></p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400 mb-1">Délai souhaité</p>
                            <p style="color:#3D2314" id="detail-delai"></p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400 mb-1">Date de commande</p>
                            <p style="color:#3D2314" id="detail-date"></p>
                        </div>
                    </div>
                    <p class="text-xs text-gray-400 mb-2">Articles</p>
                    <ul id="detail-articles" class="text-sm space-y-1 mb-4"></ul>
                    <div class="border-t pt-4 flex justify-between">
                        <span class="font-bold text-sm" style="color:#3D2314">Total</span>
                        <span id="detail-total" class="font-bold text-lg" style="color:#3D2314"></span>
                    </div>
                </div>
            </div>

            <!-- COLLECTIONS -->
            <div id="section-collections" class="section-content hidden">
                <h2 class="text-2xl font-bold mb-8" style="color:#3D2314">Gestion des collections</h2>
                <div class="bg-white rounded-2xl p-12 shadow-sm text-center">
                    <p class="text-gray-500 text-sm">Cette section n'est pas utilisée.</p>
                </div>
            </div>

            <!-- FAQ -->
            <div id="section-faq" class="section-content hidden">
                <h2 class="text-2xl font-bold mb-8" style="color:#3D2314">Gestion FAQ</h2>
                <div class="bg-white rounded-2xl p-12 shadow-sm text-center">
                    <p class="text-gray-500 text-sm">Cette section n'est pas utilisée.</p>
                </div>
            </div>

            <!-- PARAMÈTRES -->
            <div id="section-parametres" class="section-content hidden">
                <h2 class="text-2xl font-bold mb-8" style="color:#3D2314">Paramètres généraux</h2>
                <div class="bg-white rounded-2xl p-6 shadow-sm space-y-4">
                    <div>
                        <label class="text-xs font-medium mb-1 block" style="color:#3D2314">Numéro WhatsApp</label>
                        <input type="text" value="+225 07 00 77 55 37"
                               class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm outline-none focus:border-orange-400">
                    </div>
                    <div>
                        <label class="text-xs font-medium mb-1 block" style="color:#3D2314">Délai de livraison (jours)</label>
                        <select class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm outline-none">
                            <option>1 jour</option>
                            <option selected>1 à 3 jours</option>
                            <option>3 jours</option>
                        </select>
                    </div>
                    <div>
                        <label class="text-xs font-medium mb-1 block" style="color:#3D2314">Email de contact</label>
                        <input type="email" value="blacjoyaux@gmail.com"
                               class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm outline-none focus:border-orange-400">
                    </div>
                    <div>
                        <label class="text-xs font-medium mb-1 block" style="color:#3D2314">Adresse showroom</label>
                        <input type="text" value="Cocody Palmeraie, Abidjan, Côte d'Ivoire"
                               class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm outline-none focus:border-orange-400">
                    </div>
                    <button class="text-white font-semibold py-3 px-8 rounded-xl text-sm hover:opacity-90 transition" style="background:#3D2314">
                        Enregistrer les modifications
                    </button>
                </div>
            </div>

        </main>
    </div>
</div>

<script>
function login() {
    const email = document.getElementById('login-email').value;
    const password = document.getElementById('login-password').value;
    if (email === 'admin@blacjoyaux.com' && password === 'blacjoyaux2026') {
        document.getElementById('login-page').classList.add('hidden');
        document.getElementById('dashboard').classList.remove('hidden');
        chargerDonneesAdmin();
    } else {
        document.getElementById('login-error').classList.remove('hidden');
    }
}

function logout() {
    document.getElementById('dashboard').classList.add('hidden');
    document.getElementById('login-page').classList.remove('hidden');
    document.getElementById('login-email').value = '';
    document.getElementById('login-password').value = '';
}

function showSection(section) {
    document.querySelectorAll('.section-content').forEach(s => s.classList.add('hidden'));
    document.querySelectorAll('.nav-btn').forEach(b => b.style.background = 'transparent');
    document.getElementById('section-' + section).classList.remove('hidden');
    event.target.closest('.nav-btn').style.background = 'rgba(255,255,255,0.15)';
    if (section === 'commandes') {
        document.getElementById('commande-detail').classList.add('hidden');
    }
}

// ===== COMMANDES RÉELLES (localStorage) =====
function getCommandes() {
    try {
        return JSON.parse(localStorage.getItem('commandes')) || [];
    } catch (e) {
        return [];
    }
}

function saveCommandes(commandes) {
    localStorage.setItem('commandes', JSON.stringify(commandes));
}

const badgeStatut = {
    'Livrée': 'bg-green-100 text-green-700',
    'En cours': 'bg-yellow-100 text-yellow-700',
    'En attente': 'bg-blue-100 text-blue-700',
    'Annulée': 'bg-red-100 text-red-700'
};

function nomsProduits(produits) {
    return produits.map(p => p.nom + ' (x' + p.qty + ')').join(', ');
}

function formaterDate(iso) {
    const d = new Date(iso);
    return d.toLocaleDateString('fr-FR') + ' ' + d.toLocaleTimeString('fr-FR', { hour: '2-digit', minute: '2-digit' });
}

function chargerDonneesAdmin() {
    const commandes = getCommandes();

    // ---- Stats tableau de bord ----
    document.getElementById('stat-commandes').textContent = commandes.length;
    const totalFCFA = commandes.reduce((sum, c) => sum + (c.total || 0), 0);
    document.getElementById('stat-total').textContent = totalFCFA.toLocaleString();

    // ---- Dernières commandes (tableau de bord, 5 max) ----
    const derniereBody = document.getElementById('dernieres-commandes-body');
    const derniereVide = document.getElementById('dernieres-commandes-vide');
    const dernieres = [...commandes].reverse().slice(0, 5);

    if (dernieres.length === 0) {
        derniereBody.innerHTML = '';
        derniereVide.classList.remove('hidden');
    } else {
        derniereVide.classList.add('hidden');
        derniereBody.innerHTML = dernieres.map(c => `
            <tr class="border-b hover:bg-gray-50">
                <td class="py-3 px-4 text-xs font-medium" style="color:#E8820C">${c.numero}</td>
                <td class="py-3 px-4 text-xs">${c.client}</td>
                <td class="py-3 px-4 text-xs">${nomsProduits(c.produits)}</td>
                <td class="py-3 px-4 text-xs font-bold" style="color:#3D2314">${c.total.toLocaleString()} FCFA</td>
                <td class="py-3 px-4"><span class="text-xs px-2 py-1 rounded-full ${badgeStatut[c.statut] || 'bg-gray-100 text-gray-700'}">${c.statut}</span></td>
            </tr>
        `).join('');
    }

    // ---- Liste complète des commandes (section "Commandes") ----
    const commandesBody = document.getElementById('commandes-body');
    const commandesVide = document.getElementById('commandes-vide');

    if (commandes.length === 0) {
        commandesBody.innerHTML = '';
        commandesVide.classList.remove('hidden');
    } else {
        commandesVide.classList.add('hidden');
        commandesBody.innerHTML = [...commandes].reverse().map((c) => {
            const indexReel = commandes.indexOf(c);
            const options = ['En attente', 'En cours', 'Livrée', 'Annulée'];
            const optionsHtml = options.map(o => `<option value="${o}" ${o === c.statut ? 'selected' : ''}>${o}</option>`).join('');
            return `
                <tr class="border-b hover:bg-gray-50 cursor-pointer" onclick="afficherDetailCommande(${indexReel})">
                    <td class="py-4 px-6 text-xs font-medium" style="color:#E8820C">${c.numero}</td>
                    <td class="py-4 px-6 text-xs">${c.client}</td>
                    <td class="py-4 px-6 text-xs">${c.telephone}</td>
                    <td class="py-4 px-6 text-xs font-bold" style="color:#3D2314">${c.total.toLocaleString()} FCFA</td>
                    <td class="py-4 px-6 text-xs">${c.paiement}</td>
                    <td class="py-4 px-6"><span class="text-xs px-2 py-1 rounded-full ${badgeStatut[c.statut] || 'bg-gray-100 text-gray-700'}">${c.statut}</span></td>
                    <td class="py-4 px-6" onclick="event.stopPropagation()">
                        <select onchange="changerStatutCommande(${indexReel}, this.value)" class="text-xs border rounded-lg px-2 py-1 outline-none" style="color:#3D2314">
                            ${optionsHtml}
                        </select>
                    </td>
                </tr>
            `;
        }).join('');
    }
}

function afficherDetailCommande(index) {
    const commandes = getCommandes();
    const c = commandes[index];
    if (!c) return;

    document.getElementById('detail-numero').textContent = c.numero;
    document.getElementById('detail-client').textContent = c.client;
    document.getElementById('detail-telephone').textContent = c.telephone;
    document.getElementById('detail-email').textContent = c.email || '—';
    document.getElementById('detail-adresse').textContent = (c.adresse || '') + (c.ville ? ', ' + c.ville : '');
    document.getElementById('detail-delai').textContent = c.delai || '—';
    document.getElementById('detail-date').textContent = c.date ? formaterDate(c.date) : '—';
    document.getElementById('detail-total').textContent = c.total.toLocaleString('fr-FR') + ' FCFA';

    const articlesHtml = c.produits.map(p => {
        const sousTotal = p.prix * p.qty;
        return `<li class="flex justify-between"><span>${p.nom} x${p.qty}</span><span style="color:#3D2314">${sousTotal.toLocaleString('fr-FR')} FCFA</span></li>`;
    }).join('');
    document.getElementById('detail-articles').innerHTML = articlesHtml;

    document.getElementById('commande-detail').classList.remove('hidden');
    document.getElementById('commande-detail').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
}

function changerStatutCommande(index, nouveauStatut) {
    const commandes = getCommandes();
    if (commandes[index]) {
        commandes[index].statut = nouveauStatut;
        saveCommandes(commandes);
        chargerDonneesAdmin();
    }
}
</script>

</body>
</html>

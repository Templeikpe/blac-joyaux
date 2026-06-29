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
                        <p class="text-3xl font-bold mb-1" style="color:#3D2314">12</p>
                        <p class="text-xs text-gray-500">Produits</p>
                    </div>
                    <div class="stat-card bg-white rounded-2xl p-6 shadow-sm text-center">
                        <p class="text-3xl font-bold mb-1" style="color:#E8820C">8</p>
                        <p class="text-xs text-gray-500">Commandes</p>
                    </div>
                    <div class="stat-card bg-white rounded-2xl p-6 shadow-sm text-center">
                        <p class="text-3xl font-bold mb-1" style="color:#3D2314">560 000</p>
                        <p class="text-xs text-gray-500">FCFA total</p>
                    </div>
                    <div class="stat-card bg-white rounded-2xl p-6 shadow-sm text-center">
                        <p class="text-3xl font-bold mb-1" style="color:#E8820C">3</p>
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
                            <tbody>
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="py-3 px-4 text-xs font-medium" style="color:#E8820C">#BJ2026001</td>
                                    <td class="py-3 px-4 text-xs">Adjoua K.</td>
                                    <td class="py-3 px-4 text-xs">Sac à main Noir</td>
                                    <td class="py-3 px-4 text-xs font-bold" style="color:#3D2314">50 000 FCFA</td>
                                    <td class="py-3 px-4"><span class="text-xs px-2 py-1 rounded-full bg-green-100 text-green-700">Livrée</span></td>
                                </tr>
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="py-3 px-4 text-xs font-medium" style="color:#E8820C">#BJ2026002</td>
                                    <td class="py-3 px-4 text-xs">Mariam T.</td>
                                    <td class="py-3 px-4 text-xs">Sac Cuir Marron</td>
                                    <td class="py-3 px-4 text-xs font-bold" style="color:#3D2314">70 000 FCFA</td>
                                    <td class="py-3 px-4"><span class="text-xs px-2 py-1 rounded-full bg-yellow-100 text-yellow-700">En cours</span></td>
                                </tr>
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="py-3 px-4 text-xs font-medium" style="color:#E8820C">#BJ2026003</td>
                                    <td class="py-3 px-4 text-xs">Fatoumata D.</td>
                                    <td class="py-3 px-4 text-xs">Sac Bureau Premium</td>
                                    <td class="py-3 px-4 text-xs font-bold" style="color:#3D2314">85 000 FCFA</td>
                                    <td class="py-3 px-4"><span class="text-xs px-2 py-1 rounded-full bg-blue-100 text-blue-700">En attente</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- PRODUITS -->
            <div id="section-produits" class="section-content hidden">
                <div class="flex justify-between items-center mb-8">
                    <h2 class="text-2xl font-bold" style="color:#3D2314">Gestion des produits</h2>
                    <button class="text-white text-sm px-4 py-2 rounded-xl font-medium" style="background:#E8820C">
                        + Ajouter un produit
                    </button>
                </div>

                <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                    <table class="w-full text-sm">
                        <thead style="background:#F5ECD7">
                            <tr>
                                <th class="text-left py-4 px-6 text-xs font-semibold" style="color:#3D2314">Produit</th>
                                <th class="text-left py-4 px-6 text-xs font-semibold" style="color:#3D2314">Collection</th>
                                <th class="text-left py-4 px-6 text-xs font-semibold" style="color:#3D2314">Prix</th>
                                <th class="text-left py-4 px-6 text-xs font-semibold" style="color:#3D2314">Stock</th>
                                <th class="text-left py-4 px-6 text-xs font-semibold" style="color:#3D2314">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b hover:bg-gray-50">
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-3">
                                        <img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=100&q=80" class="w-10 h-10 rounded-lg object-cover">
                                        <span class="text-xs font-medium" style="color:#3D2314">Sac à main Noir</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6"><span class="text-xs px-2 py-1 rounded-full" style="background:#F5ECD7;color:#E8820C">Joyau de Bla</span></td>
                                <td class="py-4 px-6 text-xs font-bold" style="color:#3D2314">50 000 FCFA</td>
                                <td class="py-4 px-6 text-xs text-gray-500">En stock</td>
                                <td class="py-4 px-6">
                                    <div class="flex gap-2">
                                        <button class="text-xs px-3 py-1 rounded-lg text-white" style="background:#3D2314">Modifier</button>
                                        <button class="text-xs px-3 py-1 rounded-lg text-white bg-red-500">Supprimer</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b hover:bg-gray-50">
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-3">
                                        <img src="https://images.unsplash.com/photo-1590874103328-eac38a683ce7?w=100&q=80" class="w-10 h-10 rounded-lg object-cover">
                                        <span class="text-xs font-medium" style="color:#3D2314">Sac Cuir Marron</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6"><span class="text-xs px-2 py-1 rounded-full" style="background:#F5ECD7;color:#3D2314">Collection DO</span></td>
                                <td class="py-4 px-6 text-xs font-bold" style="color:#3D2314">70 000 FCFA</td>
                                <td class="py-4 px-6 text-xs text-gray-500">En stock</td>
                                <td class="py-4 px-6">
                                    <div class="flex gap-2">
                                        <button class="text-xs px-3 py-1 rounded-lg text-white" style="background:#3D2314">Modifier</button>
                                        <button class="text-xs px-3 py-1 rounded-lg text-white bg-red-500">Supprimer</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b hover:bg-gray-50">
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-3">
                                        <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?w=100&q=80" class="w-10 h-10 rounded-lg object-cover">
                                        <span class="text-xs font-medium" style="color:#3D2314">Sac Bureau Premium</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6"><span class="text-xs px-2 py-1 rounded-full" style="background:#F5ECD7;color:#E8820C">Capsule 2026</span></td>
                                <td class="py-4 px-6 text-xs font-bold" style="color:#3D2314">85 000 FCFA</td>
                                <td class="py-4 px-6 text-xs text-gray-500">En stock</td>
                                <td class="py-4 px-6">
                                    <div class="flex gap-2">
                                        <button class="text-xs px-3 py-1 rounded-lg text-white" style="background:#3D2314">Modifier</button>
                                        <button class="text-xs px-3 py-1 rounded-lg text-white bg-red-500">Supprimer</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- COMMANDES -->
            <div id="section-commandes" class="section-content hidden">
                <h2 class="text-2xl font-bold mb-8" style="color:#3D2314">Gestion des commandes</h2>

                <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
                    <table class="w-full text-sm">
                        <thead style="background:#F5ECD7">
                            <tr>
                                <th class="text-left py-4 px-6 text-xs font-semibold" style="color:#3D2314">N° Commande</th>
                                <th class="text-left py-4 px-6 text-xs font-semibold" style="color:#3D2314">Client</th>
                                <th class="text-left py-4 px-6 text-xs font-semibold" style="color:#3D2314">Téléphone</th>
                                <th class="text-left py-4 px-6 text-xs font-semibold" style="color:#3D2314">Total</th>
                                <th class="text-left py-4 px-6 text-xs font-semibold" style="color:#3D2314">Paiement</th>
                                <th class="text-left py-4 px-6 text-xs font-semibold" style="color:#3D2314">Statut</th>
                                <th class="text-left py-4 px-6 text-xs font-semibold" style="color:#3D2314">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b hover:bg-gray-50">
                                <td class="py-4 px-6 text-xs font-medium" style="color:#E8820C">#BJ2026001</td>
                                <td class="py-4 px-6 text-xs">Adjoua K.</td>
                                <td class="py-4 px-6 text-xs">+225 07 00 11 22 33</td>
                                <td class="py-4 px-6 text-xs font-bold" style="color:#3D2314">50 000 FCFA</td>
                                <td class="py-4 px-6 text-xs">Wave</td>
                                <td class="py-4 px-6"><span class="text-xs px-2 py-1 rounded-full bg-green-100 text-green-700">Livrée</span></td>
                                <td class="py-4 px-6">
                                    <select class="text-xs border rounded-lg px-2 py-1 outline-none" style="color:#3D2314">
                                        <option>Livrée</option>
                                        <option>En cours</option>
                                        <option>En attente</option>
                                        <option>Annulée</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="border-b hover:bg-gray-50">
                                <td class="py-4 px-6 text-xs font-medium" style="color:#E8820C">#BJ2026002</td>
                                <td class="py-4 px-6 text-xs">Mariam T.</td>
                                <td class="py-4 px-6 text-xs">+225 05 44 55 66 77</td>
                                <td class="py-4 px-6 text-xs font-bold" style="color:#3D2314">70 000 FCFA</td>
                                <td class="py-4 px-6 text-xs">Orange Money</td>
                                <td class="py-4 px-6"><span class="text-xs px-2 py-1 rounded-full bg-yellow-100 text-yellow-700">En cours</span></td>
                                <td class="py-4 px-6">
                                    <select class="text-xs border rounded-lg px-2 py-1 outline-none" style="color:#3D2314">
                                        <option>En cours</option>
                                        <option>Livrée</option>
                                        <option>En attente</option>
                                        <option>Annulée</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="border-b hover:bg-gray-50">
                                <td class="py-4 px-6 text-xs font-medium" style="color:#E8820C">#BJ2026003</td>
                                <td class="py-4 px-6 text-xs">Fatoumata D.</td>
                                <td class="py-4 px-6 text-xs">+225 01 23 45 67 89</td>
                                <td class="py-4 px-6 text-xs font-bold" style="color:#3D2314">85 000 FCFA</td>
                                <td class="py-4 px-6 text-xs">Espèces</td>
                                <td class="py-4 px-6"><span class="text-xs px-2 py-1 rounded-full bg-blue-100 text-blue-700">En attente</span></td>
                                <td class="py-4 px-6">
                                    <select class="text-xs border rounded-lg px-2 py-1 outline-none" style="color:#3D2314">
                                        <option>En attente</option>
                                        <option>En cours</option>
                                        <option>Livrée</option>
                                        <option>Annulée</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- COLLECTIONS -->
            <div id="section-collections" class="section-content hidden">
                <h2 class="text-2xl font-bold mb-8" style="color:#3D2314">Gestion des collections</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white rounded-2xl p-6 shadow-sm">
                        <h3 class="font-bold mb-2" style="color:#3D2314">Joyau de Bla</h3>
                        <p class="text-xs text-gray-500 mb-4">9 produits · Collection phare</p>
                        <button class="w-full text-white text-xs py-2 rounded-xl" style="background:#3D2314">Gérer</button>
                    </div>
                    <div class="bg-white rounded-2xl p-6 shadow-sm">
                        <h3 class="font-bold mb-2" style="color:#3D2314">Collection DO</h3>
                        <p class="text-xs text-gray-500 mb-4">3 produits · Dominique</p>
                        <button class="w-full text-white text-xs py-2 rounded-xl" style="background:#3D2314">Gérer</button>
                    </div>
                    <div class="bg-white rounded-2xl p-6 shadow-sm">
                        <h3 class="font-bold mb-2" style="color:#3D2314">Capsule 2026</h3>
                        <p class="text-xs text-gray-500 mb-4">3 produits · Nouveauté</p>
                        <button class="w-full text-white text-xs py-2 rounded-xl" style="background:#3D2314">Gérer</button>
                    </div>
                </div>
            </div>

            <!-- FAQ -->
            <div id="section-faq" class="section-content hidden">
                <div class="flex justify-between items-center mb-8">
                    <h2 class="text-2xl font-bold" style="color:#3D2314">Gestion FAQ</h2>
                    <button class="text-white text-sm px-4 py-2 rounded-xl font-medium" style="background:#E8820C">
                        + Ajouter une question
                    </button>
                </div>
                <div class="space-y-4">
                    <div class="bg-white rounded-2xl p-4 shadow-sm flex justify-between items-start">
                        <div>
                            <p class="font-semibold text-sm mb-1" style="color:#3D2314">Où acheter Blac Joyaux ?</p>
                            <p class="text-xs text-gray-500">Sur notre site ou au showroom Cocody Palmeraie.</p>
                        </div>
                        <div class="flex gap-2 ml-4">
                            <button class="text-xs px-3 py-1 rounded-lg text-white" style="background:#3D2314">Modifier</button>
                            <button class="text-xs px-3 py-1 rounded-lg text-white bg-red-500">Supprimer</button>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl p-4 shadow-sm flex justify-between items-start">
                        <div>
                            <p class="font-semibold text-sm mb-1" style="color:#3D2314">Quels moyens de paiement ?</p>
                            <p class="text-xs text-gray-500">Espèces, Wave, Orange Money, MTN MoMo.</p>
                        </div>
                        <div class="flex gap-2 ml-4">
                            <button class="text-xs px-3 py-1 rounded-lg text-white" style="background:#3D2314">Modifier</button>
                            <button class="text-xs px-3 py-1 rounded-lg text-white bg-red-500">Supprimer</button>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl p-4 shadow-sm flex justify-between items-start">
                        <div>
                            <p class="font-semibold text-sm mb-1" style="color:#3D2314">Quels sont les délais de livraison ?</p>
                            <p class="text-xs text-gray-500">1 à 3 jours ouvrables partout en CI.</p>
                        </div>
                        <div class="flex gap-2 ml-4">
                            <button class="text-xs px-3 py-1 rounded-lg text-white" style="background:#3D2314">Modifier</button>
                            <button class="text-xs px-3 py-1 rounded-lg text-white bg-red-500">Supprimer</button>
                        </div>
                    </div>
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
    event.target.style.background = 'rgba(255,255,255,0.15)';
}
</script>

</body>
</html>

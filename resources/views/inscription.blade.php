<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un compte — Blac Joyaux</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family:'Poppins',sans-serif; }
        .titre { font-family:'Playfair Display',serif; }
        .cote-image {
            background-image: linear-gradient(rgba(61,35,20,0.75), rgba(61,35,20,0.75)), url('https://images.unsplash.com/photo-1590874103328-eac38a683ce7?w=900&q=80');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="min-h-screen">

<div class="min-h-screen grid grid-cols-1 md:grid-cols-2">

    <!-- CÔTÉ VISUEL -->
    <div class="hidden md:flex cote-image flex-col justify-between p-10 text-white">
        <a href="/" class="font-bold text-2xl">Blac Joyaux</a>
        <div>
            <h2 class="text-3xl font-bold titre mb-3">Rejoins la famille Blac Joyaux</h2>
            <p class="text-sm text-white/80 max-w-sm">Crée ton compte pour suivre tes commandes, gagner du temps à chaque achat et profiter de nos offres exclusives.</p>
        </div>
        <p class="text-xs text-white/50">© 2026 Blac Joyaux</p>
    </div>

    <!-- FORMULAIRE -->
    <div class="flex items-center justify-center px-6 py-10" style="background:#F5ECD7">
        <div class="w-full max-w-md">
            <a href="/" class="md:hidden font-bold text-2xl block text-center mb-6" style="color:#3D2314">Blac Joyaux</a>

            <h1 class="text-2xl font-bold titre mb-1" style="color:#3D2314">Créer un compte</h1>
            <p class="text-sm text-gray-500 mb-6">C'est rapide et gratuit</p>

            @if ($errors->any())
                <div class="bg-red-50 text-red-600 text-xs rounded-lg p-3 mb-4">
                    @foreach ($errors->all() as $erreur)
                        <p>{{ $erreur }}</p>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('inscription.post') }}" class="space-y-4">
                @csrf

                <div>
                    <label class="text-xs font-semibold" style="color:#3D2314">Nom complet</label>
                    <div class="relative mt-1">
                        <i class="fas fa-user absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
                        <input type="text" name="nom" value="{{ old('nom') }}" required
                               class="w-full pl-10 pr-4 py-3 rounded-xl border border-gray-300 text-sm outline-none focus:border-[#3D2314] bg-white">
                    </div>
                </div>

                <div>
                    <label class="text-xs font-semibold" style="color:#3D2314">Adresse e-mail (Gmail ou autre)</label>
                    <div class="relative mt-1">
                        <i class="fas fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="exemple@gmail.com" required
                               class="w-full pl-10 pr-4 py-3 rounded-xl border border-gray-300 text-sm outline-none focus:border-[#3D2314] bg-white">
                    </div>
                    <p class="text-xs text-gray-400 mt-1">Un lien de confirmation te sera envoyé sur cette adresse</p>
                </div>

                <div>
                    <label class="text-xs font-semibold" style="color:#3D2314">Numéro de téléphone</label>
                    <div class="relative mt-1">
                        <i class="fas fa-phone absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
                        <input type="tel" name="telephone" value="{{ old('telephone') }}" placeholder="+225 07 00 00 00 00" required
                               class="w-full pl-10 pr-4 py-3 rounded-xl border border-gray-300 text-sm outline-none focus:border-[#3D2314] bg-white">
                    </div>
                    <p class="text-xs text-gray-400 mt-1">Un code de vérification SMS te sera envoyé</p>
                </div>

                <div>
                    <label class="text-xs font-semibold" style="color:#3D2314">Mot de passe</label>
                    <div class="relative mt-1">
                        <i class="fas fa-lock absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
                        <input type="password" name="password" required minlength="6"
                               class="w-full pl-10 pr-4 py-3 rounded-xl border border-gray-300 text-sm outline-none focus:border-[#3D2314] bg-white">
                    </div>
                </div>

                <div>
                    <label class="text-xs font-semibold" style="color:#3D2314">Confirmer le mot de passe</label>
                    <div class="relative mt-1">
                        <i class="fas fa-lock absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
                        <input type="password" name="password_confirmation" required minlength="6"
                               class="w-full pl-10 pr-4 py-3 rounded-xl border border-gray-300 text-sm outline-none focus:border-[#3D2314] bg-white">
                    </div>
                </div>

                <button type="submit"
                        class="w-full text-white font-semibold py-3 rounded-xl text-sm mt-2 hover:opacity-90 transition" style="background:#3D2314">
                    Créer mon compte
                </button>
            </form>

            <p class="text-xs text-gray-500 text-center mt-6">
                Déjà un compte ? <a href="{{ route('connexion') }}" class="font-semibold" style="color:#E8820C">Se connecter</a>
            </p>
        </div>
    </div>
</div>

</body>
</html>

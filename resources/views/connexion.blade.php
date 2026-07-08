<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion — Blac Joyaux</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family:'Poppins',sans-serif; }
        .titre { font-family:'Playfair Display',serif; }
        .cote-image {
            background-image: linear-gradient(rgba(61,35,20,0.75), rgba(61,35,20,0.75)), url('https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?w=900&q=80');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="min-h-screen">

<div class="min-h-screen grid grid-cols-1 md:grid-cols-2">

    <div class="flex items-center justify-center px-6 py-10 order-2 md:order-1" style="background:#F5ECD7">
        <div class="w-full max-w-md">
            <a href="/" class="md:hidden font-bold text-2xl block text-center mb-6" style="color:#3D2314">Blac Joyaux</a>

            <h1 class="text-2xl font-bold titre mb-1" style="color:#3D2314">Bon retour !</h1>
            <p class="text-sm text-gray-500 mb-6">Entre ton e-mail, tu recevras un code de connexion.</p>

            @if ($errors->any())
                <div class="bg-red-50 text-red-600 text-xs rounded-lg p-3 mb-4">
                    @foreach ($errors->all() as $erreur)
                        <p>{{ $erreur }}</p>
                    @endforeach
                </div>
            @endif

            @if(session('succes'))
                <div class="bg-green-50 text-green-700 text-xs rounded-lg p-3 mb-4">{{ session('succes') }}</div>
            @endif

            <form method="POST" action="{{ route('connexion.post') }}" class="space-y-4">
                @csrf

                <div>
                    <label class="text-xs font-semibold" style="color:#3D2314">E-mail</label>
                    <div class="relative mt-1">
                        <i class="fas fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
                        <input type="email" name="email" value="{{ old('email') }}" required
                               class="w-full pl-10 pr-4 py-3 rounded-xl border border-gray-300 text-sm outline-none focus:border-[#3D2314] bg-white">
                    </div>
                </div>

                <button type="submit"
                        class="w-full text-white font-semibold py-3 rounded-xl text-sm hover:opacity-90 transition" style="background:#3D2314">
                    Recevoir mon code par e-mail
                </button>
            </form>
        </div>
    </div>

    <div class="hidden md:flex cote-image flex-col justify-between p-10 text-white order-1 md:order-2">
        <a href="/" class="font-bold text-2xl">Blac Joyaux</a>
        <div>
            <h2 class="text-3xl font-bold titre mb-3">Ravis de te revoir</h2>
            <p class="text-sm text-white/80 max-w-sm">Retrouve tes commandes, tes favoris et toutes tes infos en un clic.</p>
        </div>
        <p class="text-xs text-white/50">© 2026 Blac Joyaux</p>
    </div>
</div>

</body>
</html>

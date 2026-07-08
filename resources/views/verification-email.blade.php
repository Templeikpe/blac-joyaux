<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérifie ton e-mail — Blac Joyaux</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Montserrat', sans-serif; background:#F5ECD7; }
        .titre { font-family: 'Montserrat', sans-serif; }
    </style>
</head>
<body>

<header class="border-b border-gray-400 bg-white">
    <div class="flex items-center justify-center h-16 px-7">
        <a href="/" class="font-bold text-3xl" style="color:#3D2314">Blac Joyaux</a>
    </div>
</header>

<section class="flex items-center justify-center px-6 py-16">
    <div class="bg-white rounded-2xl shadow-sm p-8 w-full max-w-md text-center">
        <div class="text-5xl mb-4">📧</div>
        <h1 class="text-2xl font-bold titre mb-2" style="color:#3D2314">Vérifie ton e-mail</h1>
        <p class="text-sm text-gray-500 mb-6">
            Un lien de vérification a été envoyé à ton adresse e-mail. Clique dessus pour confirmer ton compte.
        </p>

        @if(session('succes'))
            <div class="bg-green-50 text-green-700 text-xs rounded-lg p-3 mb-4">{{ session('succes') }}</div>
        @endif

        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="text-white font-semibold px-6 py-3 rounded-xl text-sm" style="background:#3D2314">
                Renvoyer l'e-mail
            </button>
        </form>
    </div>
</section>

</body>
</html>

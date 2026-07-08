<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blac Joyaux - Collections</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-[#f8f5ef]">

<div class="max-w-7xl mx-auto border border-gray-400 min-h-screen">

    <!-- HEADER -->
    <header class="border-b border-gray-400">
        <div class="relative flex items-center justify-between h-16 px-7">
            <button id="menuBtn" class="border border-gray-500 w-9 h-9 flex justify-center items-center hover:bg-gray-100 transition">
                <i class="fas fa-bars"></i>
            </button>
            <h1 class="absolute left-1/2 -translate-x-1/2 font-bold text-3xl">
                Blac Joyaux
            </h1>
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

    <!-- OVERLAY -->
    <div id="overlay" class="hidden fixed inset-0 bg-black/50 z-40"></div>

    <!-- TITRE -->
    <section class="text-center mt-8">
        <p class="text-orange-500 font-semibold">Nos collections</p>
        <h2 class="text-3xl md:text-5xl font-bold mt-2">
            Nos trois collections de sacs made in Cote d'Ivoire
        </h2>
    </section>

    <!-- COLLECTIONS -->
    <section class="mt-14 px-8 pb-14">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-[2px] bg-gray-white">

            <!-- CARD 1 — Collection DO -->
            <div class="relative h-[400px] md:h-[600px] overflow-hidden group">
                <img src="{{ asset('img/collection-do.jpg') }}" alt="Sac" class="w-full h-full object-cover duration-500 group-hover:scale-110>
                     ">
                <div class="absolute inset-0 bg-black/35"></div>
                <div class="absolute bottom-10 left-8 text-white">
                    <h3 class="font-bold text-2xl md:text-4xl uppercase">Collection "DO"</h3>
                    <p class="mt-3 text-lg md:text-2xl">Sac premium made in</p>
                    <p class="font-bold text-orange-400 text-lg md:text-2xl">Côte d'Ivoire</p>
                    <a href="/collection/do" class="mt-6 block text-orange-500 font-bold text-xl md:text-2xl hover:underline">
                        Explorer
                    </a>
                </div>
            </div>

            <!-- CARD 2 — Collection Joyaux de Bla -->
            <div class="relative h-[400px] md:h-[600px] overflow-hidden group">
                <img src="{{ asset('img/collection-joyaubla.jpg') }}" alt="Sac"  class="w-full h-full object-cover duration-500 group-hover:scale-110>
                ">

                <div class="absolute inset-0 bg-black/35"></div>
                <div class="absolute bottom-10 left-8 text-white">
                    <h3 class="font-bold text-2xl md:text-4xl uppercase">
                        Collection<br>"JOYAUX DE BLA"
                    </h3>
                    <p class="mt-3 text-lg md:text-2xl max-w-md leading-relaxed">
                        Collection centrale de la marque inspirés de la poupée ashanti.
                    </p>
                    <a href="/collection/joyau-de-bla" class="mt-6 block text-orange-500 font-bold text-xl md:text-2xl hover:underline">
                        Explorer
                    </a>
                </div>
            </div>

        </div>
    </section>


</div>

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

menuBtn.onclick = () => {
    sidebar.style.left = "0";
    overlay.classList.remove("hidden");
}
closeMenu.onclick = closeSidebar;
overlay.onclick = closeSidebar;

function closeSidebar(){
    sidebar.style.left = "-300px";
    overlay.classList.add("hidden");
}
</script>

</body>
</html>

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RechercheController extends Controller
{
    /**
     * Index de tout le contenu recherchable du site :
     * les 15 produits (Joyau de Bla + Collection DO) et les pages principales.
     */
    private function index(): array
    {
        return [
            // ================= PRODUITS — JOYAU DE BLA =================
            ['type' => 'produit', 'titre' => 'Noir avec bijoux doré', 'description' => "Sac à main élégant en noir avec bijoux dorés. Coloration: Noir profond.", 'collection' => 'Joyau de Bla', 'prix' => 50000, 'img' => asset('img/Sac-noir.jpg'), 'url' => '/fiche-produit?nom=' . urlencode('Noir avec bijoux doré') . '&prix=50000&img=' . urlencode(asset('img/Sac-noir.jpg')) . '&collection=' . urlencode('Joyau de Bla')],
            ['type' => 'produit', 'titre' => 'Bleu avec bijoux doré', 'description' => "Sac à main en bleu vibrant avec bijoux dorés. Coloration: Bleu éclatant.", 'collection' => 'Joyau de Bla', 'prix' => 50000, 'img' => asset('img/Sac1-blueu.png'), 'url' => '/fiche-produit?nom=' . urlencode('Bleu avec bijoux doré') . '&prix=50000&img=' . urlencode(asset('img/Sac1-blueu.png')) . '&collection=' . urlencode('Joyau de Bla')],
            ['type' => 'produit', 'titre' => 'Doré', 'description' => "Sac à main en doré luxueux avec bijoux assortis. Coloration: Doré brillant.", 'collection' => 'Joyau de Bla', 'prix' => 50000, 'img' => asset('img/Sac-dore.jpg'), 'url' => '/fiche-produit?nom=' . urlencode('Doré') . '&prix=50000&img=' . urlencode(asset('img/Sac-dore.jpg')) . '&collection=' . urlencode('Joyau de Bla')],
            ['type' => 'produit', 'titre' => 'Rouge avec bijoux doré', 'description' => "Sac à main rouge éclatant avec bijoux dorés. Coloration: Rouge passion.", 'collection' => 'Joyau de Bla', 'prix' => 50000, 'img' => asset('img/Sac-rouge.png'), 'url' => '/fiche-produit?nom=' . urlencode('Rouge avec bijoux doré') . '&prix=50000&img=' . urlencode(asset('img/Sac-rouge.png')) . '&collection=' . urlencode('Joyau de Bla')],
            ['type' => 'produit', 'titre' => 'Bleu ciel avec bijoux doré', 'description' => "Sac à main en bleu ciel clair avec bijoux dorés. Coloration: Bleu ciel tendre.", 'collection' => 'Joyau de Bla', 'prix' => 70000, 'img' => asset('img/Sac-blanc.png'), 'url' => '/fiche-produit?nom=' . urlencode('Bleu ciel avec bijoux doré') . '&prix=70000&img=' . urlencode(asset('img/Sac-blanc.png')) . '&collection=' . urlencode('Joyau de Bla')],
            ['type' => 'produit', 'titre' => 'Rose avec bijoux doré', 'description' => "Sac à main en rose délicat avec bijoux dorés. Coloration: Rose tendre.", 'collection' => 'Joyau de Bla', 'prix' => 50000, 'img' => asset('img/Sac-violet.jpg'), 'url' => '/fiche-produit?nom=' . urlencode('Rose avec bijoux doré') . '&prix=50000&img=' . urlencode(asset('img/Sac-violet.jpg')) . '&collection=' . urlencode('Joyau de Bla')],
            ['type' => 'produit', 'titre' => 'Croco jaune', 'description' => "Sac à main style croco en jaune éclatant. Coloration: Jaune vif.", 'collection' => 'Joyau de Bla', 'prix' => 70000, 'img' => asset('img/Sac-jaune.jpg'), 'url' => '/fiche-produit?nom=' . urlencode('Croco jaune') . '&prix=70000&img=' . urlencode(asset('img/Sac-jaune.jpg')) . '&collection=' . urlencode('Joyau de Bla')],
            ['type' => 'produit', 'titre' => 'Croco Bleu Ciel petit format', 'description' => "Sac à main format compact style croco en bleu ciel. Coloration: Bleu ciel.", 'collection' => 'Joyau de Bla', 'prix' => 70000, 'img' => asset('img/Sac.jpg'), 'url' => '/fiche-produit?nom=' . urlencode('Croco Bleu Ciel petit format') . '&prix=70000&img=' . urlencode(asset('img/Sac.jpg')) . '&collection=' . urlencode('Joyau de Bla')],
            ['type' => 'produit', 'titre' => 'Imprimé peau de serpent', 'description' => "Sac à main avec motif peau de serpent en marron cassé. Coloration: Marron chaud.", 'collection' => 'Joyau de Bla', 'prix' => 70000, 'img' => asset('img/Sac-marroncasse.jpg'), 'url' => '/fiche-produit?nom=' . urlencode('Imprimé peau de serpent') . '&prix=70000&img=' . urlencode(asset('img/Sac-marroncasse.jpg')) . '&collection=' . urlencode('Joyau de Bla')],
            ['type' => 'produit', 'titre' => 'Vert avec bijoux doré', 'description' => "Sac à main façon croco en vert profond avec bijoux dorés. Coloration: Vert émeraude.", 'collection' => 'Joyau de Bla', 'prix' => 70000, 'img' => asset('img/Sac-Blac-Joyaux-Vert-2-416x416.jpg'), 'url' => '/fiche-produit?nom=' . urlencode('Vert avec bijoux doré') . '&prix=70000&img=' . urlencode(asset('img/Sac-Blac-Joyaux-Vert-2-416x416.jpg')) . '&collection=' . urlencode('Joyau de Bla')],
            ['type' => 'produit', 'titre' => 'Marron avec chaîne dorée', 'description' => "Sac à main en marron chaleureux avec chaîne dorée. Coloration: Marron cognac.", 'collection' => 'Joyau de Bla', 'prix' => 60000, 'img' => asset('img/sac-marron.jpg'), 'url' => '/fiche-produit?nom=' . urlencode('Marron avec chaîne dorée') . '&prix=60000&img=' . urlencode(asset('img/sac-marron.jpg')) . '&collection=' . urlencode('Joyau de Bla')],
            ['type' => 'produit', 'titre' => 'Cuir marron structuré', 'description' => "Sac à main en cuir marron à la coupe structurée. Coloration: Marron cuir.", 'collection' => 'Joyau de Bla', 'prix' => 65000, 'img' => asset('img/sac-cui-marron.jpg'), 'url' => '/fiche-produit?nom=' . urlencode('Cuir marron structuré') . '&prix=65000&img=' . urlencode(asset('img/sac-cui-marron.jpg')) . '&collection=' . urlencode('Joyau de Bla')],

            // ================= PRODUITS — COLLECTION DO =================
            ['type' => 'produit', 'titre' => 'Sac Cuir Caramel', 'description' => "Sac à main en cuir caramel chaleureux avec finitions premium.", 'collection' => 'Collection DO', 'prix' => 60000, 'img' => asset('img/Sac-blac-joyaux-DO-croco-lezard-416x416.jpg'), 'url' => '/fiche-produit?nom=' . urlencode('Sac Cuir Caramel') . '&prix=60000&img=' . urlencode(asset('img/Sac-blac-joyaux-DO-croco-lezard-416x416.jpg')) . '&collection=' . urlencode('Collection DO')],
            ['type' => 'produit', 'titre' => 'Sac Bureau Gold', 'description' => "Sac à main de luxe en doré brillant, parfait pour le bureau.", 'collection' => 'Collection DO', 'prix' => 85000, 'img' => asset('img/Sac-dore.jpg'), 'url' => '/fiche-produit?nom=' . urlencode('Sac Bureau Gold') . '&prix=85000&img=' . urlencode(asset('img/Sac-dore.jpg')) . '&collection=' . urlencode('Collection DO')],
            ['type' => 'produit', 'titre' => 'Croco Lézard', 'description' => "Sac à main façon croco lézard, alliant texture raffinée et élégance intemporelle.", 'collection' => 'Collection DO', 'prix' => 70000, 'img' => asset('img/Sac-blac-joyaux-DO-croco-lezard-416x416.jpg'), 'url' => '/fiche-produit?nom=' . urlencode('Croco Lézard') . '&prix=70000&img=' . urlencode(asset('img/Sac-blac-joyaux-DO-croco-lezard-416x416.jpg')) . '&collection=' . urlencode('Collection DO')],

            // ================= PAGES DU SITE =================
            ['type' => 'page', 'titre' => 'Accueil', 'description' => "La page d'accueil de Blac Joyaux.", 'url' => '/'],
            ['type' => 'page', 'titre' => 'Boutique', 'description' => "Toutes nos collections de sacs à main.", 'url' => '/boutique'],
            ['type' => 'page', 'titre' => 'À propos', 'description' => "L'histoire et les valeurs de Blac Joyaux.", 'url' => '/a-propos'],
            ['type' => 'page', 'titre' => 'Actualités', 'description' => "Les dernières nouveautés Blac Joyaux.", 'url' => '/actualites'],
            ['type' => 'page', 'titre' => 'Moayé', 'description' => "Actualité : le Moayé incarne l'élégance professionnelle.", 'url' => '/actualites/moaye'],
            ['type' => 'page', 'titre' => 'Kiolêh', 'description' => "Actualité : Kiolêh, symbole de flamme et d'identité ivoirienne.", 'url' => '/actualites/kioleh'],
            ['type' => 'page', 'titre' => 'Sika', 'description' => "Actualité : Sika, l'or véritable et l'héritage artisanal.", 'url' => '/actualites/sika'],
            ['type' => 'page', 'titre' => 'FAQ', 'description' => "Les questions fréquentes sur les commandes et livraisons.", 'url' => '/faq'],
            ['type' => 'page', 'titre' => 'Contact', 'description' => "Contacte Blac Joyaux pour toute question.", 'url' => '/contact'],
            ['type' => 'page', 'titre' => 'Mon panier', 'description' => "Voir les articles ajoutés à ton panier.", 'url' => '/panier'],
            ['type' => 'page', 'titre' => 'Se connecter', 'description' => "Connecte-toi pour voir ton historique de commandes.", 'url' => '/connexion'],
        ];
    }

    /**
     * Enlève les accents pour une recherche plus tolérante
     * (ex: "elegant" trouve aussi "élégant").
     */
    private function normaliser(string $texte): string
    {
        $texte = mb_strtolower($texte);
        $conversion = @iconv('UTF-8', 'ASCII//TRANSLIT', $texte);
        return $conversion !== false ? $conversion : $texte;
    }

    public function afficher(Request $request)
    {
        $q = trim((string) $request->query('q', ''));
        $resultats = [];

        if ($q !== '') {
            $qNormalise = $this->normaliser($q);

            foreach ($this->index() as $item) {
                $texteRecherchable = $this->normaliser(
                    $item['titre'] . ' ' . ($item['description'] ?? '') . ' ' . ($item['collection'] ?? '')
                );

                if (Str::contains($texteRecherchable, $qNormalise)) {
                    $resultats[] = $item;
                }
            }
        }

        return view('recherche', [
            'q' => $q,
            'resultats' => $resultats,
        ]);
    }
}

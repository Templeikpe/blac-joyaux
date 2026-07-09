<?php

use App\Http\Controllers\AdminClientController;
use App\Http\Controllers\AdminCommandeController;
use App\Http\Controllers\ClientAuthController;
use App\Http\Controllers\CommandeController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// ============================================================
// PAGES PUBLIQUES
// ============================================================

Route::get('/', function () {
    return view('welcome');
});

Route::get('/boutique', function () {
    return view('boutique');
})->name('boutique');

// Recherche globale du site
Route::get('/recherche', [App\Http\Controllers\RechercheController::class, 'afficher'])->name('recherche');

Route::get('/a-propos', function () {
    return view('a-propos');
})->name('a-propos');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/actualites', function () {
    return view('actualites');
})->name('actualites');

Route::get('/actualites/moaye', function () {
    return view('actualite-detail', [
        'titre' => 'Moayé',
        'description' => "Le Moayé incarne l'alliance entre l'élégance professionnelle et l'héritage ivoirien. Un compagnon du quotidien qui allie discrétion, raffinement et authenticité.",
        'produits' => [
            ['nom' => 'Vert avec bijoux doré', 'prix' => 70000, 'img' => asset('img/Sac-Blac-Joyaux-Vert-2-416x416.jpg'), 'collection' => 'Joyau de Bla', 'description' => "Sac à main façon croco en vert profond avec bijoux dorés. Coloration: Vert émeraude. Un choix audacieux et raffiné de la collection Joyaux de Bla."],
            ['nom' => 'Marron avec chaîne dorée', 'prix' => 60000, 'img' => asset('img/sac-marron.jpg'), 'collection' => 'Joyau de Bla', 'description' => "Sac à main en marron chaleureux avec chaîne dorée. Coloration: Marron cognac. Un intemporel du quotidien - collection Joyaux de Bla."],
            ['nom' => 'Cuir marron structuré', 'prix' => 65000, 'img' => asset('img/sac-cui-marron.jpg'), 'collection' => 'Joyau de Bla', 'description' => "Sac à main en cuir marron à la coupe structurée. Coloration: Marron cuir. Élégance sobre et robuste - collection Joyaux de Bla."],
        ],
    ]);
})->name('actualites.moaye');

Route::get('/actualites/kioleh', function () {
    return view('actualite-detail', [
        'titre' => 'Kiolêh',
        'description' => "Kiolêh naît dans un esprit de flamme : un symbole chaleureux du Sud de la Côte d'Ivoire, célébrant l'expression d'une identité authentique.",
        'sousTitre' => "« Kiolêh par Blac Joyaux : Mother famous, affirme telle sagesse. »",
        'produits' => [
            ['nom' => 'Vert avec bijoux doré', 'prix' => 70000, 'img' => asset('img/Sac-Blac-Joyaux-Vert-2-416x416.jpg'), 'collection' => 'Joyau de Bla', 'description' => "Sac à main façon croco en vert profond avec bijoux dorés. Coloration: Vert émeraude. Un choix audacieux et raffiné de la collection Joyaux de Bla."],
            ['nom' => 'Marron avec chaîne dorée', 'prix' => 60000, 'img' => asset('img/sac-marron.jpg'), 'collection' => 'Joyau de Bla', 'description' => "Sac à main en marron chaleureux avec chaîne dorée. Coloration: Marron cognac. Un intemporel du quotidien - collection Joyaux de Bla."],
            ['nom' => 'Cuir marron structuré', 'prix' => 65000, 'img' => asset('img/sac-cui-marron.jpg'), 'collection' => 'Joyau de Bla', 'description' => "Sac à main en cuir marron à la coupe structurée. Coloration: Marron cuir. Élégance sobre et robuste - collection Joyaux de Bla."],
        ],
    ]);
})->name('actualites.kioleh');

Route::get('/actualites/sika', function () {
    return view('actualite-detail', [
        'titre' => 'Sika',
        'description' => "Le Sika incarne l'essence et l'élégance du cuivre, une pièce qui allie hommage artisanal et style intemporel.",
        'sousTitre' => "« Sika : l'Or véritable, notre héritage. »",
        'produits' => [
            ['nom' => 'Vert avec bijoux doré', 'prix' => 70000, 'img' => asset('img/Sac-Blac-Joyaux-Vert-2-416x416.jpg'), 'collection' => 'Joyau de Bla', 'description' => "Sac à main façon croco en vert profond avec bijoux dorés. Coloration: Vert émeraude. Un choix audacieux et raffiné de la collection Joyaux de Bla."],
            ['nom' => 'Marron avec chaîne dorée', 'prix' => 60000, 'img' => asset('img/sac-marron.jpg'), 'collection' => 'Joyau de Bla', 'description' => "Sac à main en marron chaleureux avec chaîne dorée. Coloration: Marron cognac. Un intemporel du quotidien - collection Joyaux de Bla."],
            ['nom' => 'Cuir marron structuré', 'prix' => 65000, 'img' => asset('img/sac-cui-marron.jpg'), 'collection' => 'Joyau de Bla', 'description' => "Sac à main en cuir marron à la coupe structurée. Coloration: Marron cuir. Élégance sobre et robuste - collection Joyaux de Bla."],
        ],
    ]);
})->name('actualites.sika');

Route::get('/panier', function () {
    return view('panier');
})->name('panier');

Route::get('/fiche-produit', function () {
    return view('fiche-produit');
})->name('fiche-produit');

Route::get('/collection/joyau-de-bla', function () {
    return view('collection-joyau');
})->name('collection-joyau');

Route::get('/collection/do', function () {
    return view('collection-do');
})->name('collection-do');

Route::get('/legal', function () {
    return view('legal');
})->name('legal');


// ============================================================
// COMMANDE
// ============================================================

Route::get('/commande', function () {
    return view('commande');
})->name('commande');

Route::post('/commande', [CommandeController::class, 'store'])->name('commande.store');


// ============================================================
// AUTHENTIFICATION CLIENT
// ============================================================

// Inscription
Route::get('/inscription', [ClientAuthController::class, 'showInscription'])->name('inscription');
Route::post('/inscription', [ClientAuthController::class, 'inscrire'])->name('inscription.post');

// Connexion
Route::get('/connexion', [ClientAuthController::class, 'showConnexion'])->name('connexion');
Route::post('/connexion', [ClientAuthController::class, 'connecter'])->name('connexion.post');

// Vérification du code de connexion envoyé par e-mail
Route::get('/connexion/code', [ClientAuthController::class, 'showVerificationConnexion'])->name('verification.connexion');
Route::post('/connexion/code', [ClientAuthController::class, 'verifierCodeConnexion'])->name('verification.connexion.verifier');
Route::post('/connexion/code/renvoyer', [ClientAuthController::class, 'renvoyerCodeConnexion'])->name('verification.connexion.renvoyer');

// Déconnexion
Route::post('/deconnexion', [ClientAuthController::class, 'deconnecter'])->name('deconnexion');

// Espace client + vérifications — protégé, uniquement si connecté
Route::middleware('auth:client')->group(function () {
    Route::get('/mon-compte', [ClientAuthController::class, 'monCompte'])->name('mon-compte');

    // Vérification téléphone (OTP)
    Route::get('/verification-telephone', [ClientAuthController::class, 'showVerificationTelephone'])->name('verification.telephone');
    Route::post('/verification-telephone', [ClientAuthController::class, 'verifierOtp'])->name('verification.telephone.verifier');
    Route::post('/verification-telephone/renvoyer', [ClientAuthController::class, 'renvoyerOtp'])->name('verification.telephone.renvoyer');

    // Vérification e-mail
    Route::get('/verify-email', function () {
        return view('verification-email');
    })->name('verification.notice');

    Route::get('/verify-email/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect()->route('mon-compte')->with('succes', 'E-mail vérifié !');
    })->middleware('signed')->name('verification.verify');

    Route::post('/email/verification-notification', function (Request $request) {
        $request->user('client')->sendEmailVerificationNotification();
        return back()->with('succes', 'Lien de vérification renvoyé.');
    })->middleware('throttle:6,1')->name('verification.send');
});


// ============================================================
// ADMINISTRATION
// ============================================================

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/admin/clients', [AdminClientController::class, 'index'])->name('admin.clients');
Route::delete('/admin/clients/{client}', [AdminClientController::class, 'supprimer'])->name('admin.clients.supprimer');

Route::get('/admin/commandes', [AdminCommandeController::class, 'index'])->name('admin.commandes');
Route::patch('/admin/commandes/{commande}/statut', [AdminCommandeController::class, 'changerStatut'])->name('admin.commandes.statut');
Route::post('/commande', [CommandeController::class, 'store'])->name('commande.store');

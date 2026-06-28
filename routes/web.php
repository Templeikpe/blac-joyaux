<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/boutique', function () {
    return view('boutique');
})->name('boutique');

Route::get('/capsule', function () {
    return view('capsule');
})->name('capsule');

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

Route::get('/panier', function () {
    return view('panier');
})->name('panier');

Route::get('/commande', function () {
    return view('commande');
})->name('commande');
Route::get('/fiche-produit', function () {
    return view('fiche-produit');
})->name('fiche-produit');
Route::get('/collection/joyau-de-bla', function () {
    return view('collection-joyau');
})->name('collection-joyau');

Route::get('/collection/do', function () {
    return view('collection-do');
})->name('collection-do');

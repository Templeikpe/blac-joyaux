<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $fillable = [
        'client_id',
        'numero',
        'nom_complet',
        'telephone',
        'adresse',
        'paiement',
        'produits',
        'total',
    ];

    protected $casts = [
        'produits' => 'array',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}

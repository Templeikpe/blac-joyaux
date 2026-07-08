<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->nullable()->constrained('clients')->nullOnDelete();
            $table->string('numero')->unique();
            $table->string('nom_complet');
            $table->string('telephone');
            $table->string('adresse');
            $table->string('paiement');
            $table->json('produits');
            $table->unsignedBigInteger('total');
            $table->string('statut')->default('En attente');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('commandes');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('recette_produits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produit_id')->constrained('produits');
			$table->foreignId('recette_id')->constrained('recettes');
			$table->integer('quantite');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('recette_produits');
    }
};

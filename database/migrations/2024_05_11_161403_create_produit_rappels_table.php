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
        Schema::create('produitRappels', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
			$table->date('dateExpiration');
			$table->integer('quantite');
			$table->decimal('prixUnitaire');
			$table->integer('marge');
			$table->foreignId('user_id')->constrained('users');
			$table->foreignId('produit_id')->constrained('produits')->nullable();
			$table->foreignId('categorie_id')->constrained('categories')->nullable();
			$table->string('nomTypeProduit')->nullable();
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
        Schema::dropIfExists('produitRappels');
    }
};

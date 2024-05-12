<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //il faut ajouter le champ lien_image dans la table produit_vente
        Schema::table('produitVentes', function (Blueprint $table) {
            $table->string('lien_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('produitVentes', function (Blueprint $table) {
            $table->dropColumn('lien_image');
        });
    }
};

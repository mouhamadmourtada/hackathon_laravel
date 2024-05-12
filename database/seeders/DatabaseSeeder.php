<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categorie;
use App\Models\Commande;
use App\Models\Evenement;
use App\Models\Paiement;
use App\Models\Panier;
use App\Models\Partenaire;
use App\Models\PosteSocial;
use App\Models\Pref;
use App\Models\Produit;
use App\Models\ProduitRappel;
use App\Models\ProduitVente;
use App\Models\Recette;
use App\Models\StructureSocial;
use App\Models\TypeStructure;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        // Categorie::factory(10)->create();
        // Commande::factory(10)->create();
        // Evenement::factory(10)->create();
        // Panier::factory(10)->create();
        // Partenaire::factory(10)->create();
        // Pref::factory(10)->create();
        // Paiement::factory(10)->create();
        // Produit::factory(10)->create();
        // ProduitRappel::factory(10)->create();
        // ProduitVente::factory(10)->create();
        // Recette::factory(10)->create();
        // StructureSocial::factory(10)->create();
        // TypeStructure::factory(10)->create();
        // PosteSocial::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // php artisan db:seed
        \App\Models\Produit::factory(20)->create();
    }
}

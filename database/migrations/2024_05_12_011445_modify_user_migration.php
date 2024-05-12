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
        //on doit modifier la table users pour ajouter les champs, nom, prenom, adresse, dateNaissance, numTelephone, sexe, userable_type, userable_id
        // Schema::table('users', function (Blueprint $table) {
        //     $table->string('nom');
        //     $table->string('prenom');
        //     $table->string('adresse')->nullable();
        //     $table->date('dateNaissance')->nullable();
        //     $table->string('numTelephone');
        //     $table->enum('sexe', ['m', 'f']);
        //     $table->string('userable_type')->nullable();
        //     $table->integer('userable_id')->nullable();
        //     $table->string('logitude')->nullable();
        //     $table->string('latitude')->nullable();
        //     // on doit enlever le champ name 
        //     $table->dropColumn('name');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('nom');
            $table->dropColumn('prenom');
            $table->dropColumn('adresse');
            $table->dropColumn('dateNaissance');
            $table->dropColumn('numTelephone');
            $table->dropColumn('sexe');
            $table->dropColumn('userable_type');
            $table->dropColumn('userable_id');
            $table->dropColumn('logitude');
            $table->dropColumn('latitude');
            $table->string('name');

        });
    }
};

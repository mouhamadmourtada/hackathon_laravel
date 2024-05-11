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
        Schema::create('partenaires', function (Blueprint $table) {
            $table->id();
            $table->string('nomStructure');
			$table->string('localisationStructure');
			$table->foreignId('type_structure_id')->constrained('type_structures')->nullable();
			$table->string('domaineActivite');
			$table->text('description');
			$table->string('slogan')->nullable();
			$table->string('logo')->nullable();
			$table->string('logitude')->nullable();
			$table->string('latitude')->nullable();
            
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
        Schema::dropIfExists('partenaires');
    }
};

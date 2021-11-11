<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFonctionsPersonnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fonctions_personnels', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->enum('genre', ['Aucun', 'Accompagnant', 'Administratif', 'Autre fonction', 'Cadre de direction', 'Cadre de Vie scolaire', 'Médical', 'Surveillance'])->default('Aucun')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fonctions_personnels');
    }
}

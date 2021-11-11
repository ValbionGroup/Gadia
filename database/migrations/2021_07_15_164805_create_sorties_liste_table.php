<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSortiesListeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sorties_liste', function (Blueprint $table) {
            $table->id('id_sortie');
            $table->string('code');
            $table->string('color');
            $table->string('libelle');
            $table->enum('entree', ['pre', 'hab', 'ouv', 'custom']);
            $table->time('entree_custom')->nullable()->default(null);
            $table->enum('sortie', ['der', 'hab', 'fer', 'custom']);
            $table->time('sortie_custom')->nullable()->default(null);
            $table->string('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sorties_liste');
    }
}

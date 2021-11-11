<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professeurs', function (Blueprint $table) {
            $table->id('id_prof');
            $table->string('login', 50)->index();
            $table->string('nom', 100);
            $table->string('prenom', 100);
            $table->enum('civilite', ['Mme', 'M', 'Mlle']);
            $table->string('email');
            $table->string('tel');
            $table->time('ORS', 0)->default('18:00:00');
            $table->time('HTT', 0)->default('02:00:00');
            $table->integer('status')->default(1);
            $table->integer('hs_max')->default(2);
            $table->integer('matiere_pref')->nullable();
            $table->string('mh')->default('*_*_*');
            $table->string('ha')->default('*_*');
            $table->string('plg')->default('0_0');
            $table->string('djt')->default('*_*');
            $table->integer('djj')->default(0);
            $table->string('salle_pref')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professeurs');
    }
}

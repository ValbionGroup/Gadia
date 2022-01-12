<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleves', function (Blueprint $table) {
            $table->id('id_eleve');
            $table->string('ine', 50)->index();
            $table->string('login', 50)->index();
            $table->string('nom', 100);
            $table->string('prenom', 100);
            $table->enum('sexe', ['F','M']);
            $table->date('naissance');
            $table->string('lieu_naissance', 50)->comment('Code de Sconet');
            $table->string('elenoet', 50);
            $table->string('ele_id', 10)->comment('Utilisé par Sconet');
            $table->string('email');
            $table->string('tel');
            $table->date('date_entree');
            $table->date('date_sortie');
            $table->integer('etab_org')->nullable();
            $table->string('mef_code', 50)->index();
            $table->integer('filiere_id')->nullable();
            $table->enum('regime', ['dp', 'ext', 'int'])->nullable();
            $table->string('idd_self')->nullable();
            $table->string('num_casier')->nullable();
            $table->enum('medical', ['fav', 'fav_amen', 'def_tmp', 'def_def'])->nullable();
            $table->integer('psc1')->nullable();
            $table->integer('assn')->nullable();
            $table->integer('gqs')->nullable();
            $table->integer('aper')->nullable();
            $table->integer('assr1')->nullable();
            $table->integer('assr2')->nullable();
            $table->integer('aps')->nullable();
            $table->integer('aut_sortie');
            $table->integer('redoub')->default(0);
            $table->integer('transport')->default(0);
            $table->integer('adr_id');
            $table->integer('id_sacoche');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eleves');
    }
}

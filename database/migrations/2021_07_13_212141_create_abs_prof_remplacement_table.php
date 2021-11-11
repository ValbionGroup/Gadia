<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsProfRemplacementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abs_prof_remplacement', function (Blueprint $table) {
            $table->id();
            $table->integer('id_absence');
            $table->integer('id_groupe');
            $table->integer('id_aid');
            $table->integer('id_classe');
            $table->char('jour', 8);
            $table->integer('id_creneau');
            $table->dateTime('date_debut_r');
            $table->dateTime('date_fin_r');
            $table->string('reponse', 30);
            $table->dateTime('date_reponse');
            $table->string('login_user', 50);
            $table->text('commentaire_prof');
            $table->string('salle', 100);
            $table->text('texte_famille');
            $table->string('info_famille', 10);
            $table->string('duree', 10);
            $table->string('heuredeb_dec', 3);
            $table->string('jour_semaine', 10);
            $table->integer('id_cours_remplaced');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abs_prof_remplacement');
    }
}

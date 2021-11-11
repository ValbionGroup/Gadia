<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsencesRbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absences_rb', function (Blueprint $table) {
            $table->id();
            $table->string('eleve_id', 50);
            $table->string('retard_absence', 1);
            $table->string('groupe_id', 8);
            $table->integer('edt_id');
            $table->string('jour_semaine', 10);
            $table->integer('creneau_id');
            $table->integer('debut_ts');
            $table->integer('fin_ts');
            $table->bigInteger('date_saisie');
            $table->string('login_saisie', 50);
            $table->index(['eleve_id', 'fin_ts', 'debut_ts', 'retard_absence'], "eleve_debut_fin_retard");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absences_rb');
    }
}

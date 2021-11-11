<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsencesElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absences_eleves', function (Blueprint $table) {
            $table->id('id_absence_eleve');
            $table->char('type_absence_eleve', 1);
            $table->string('eleve_absence_eleve', 25)->default(0);
            $table->char('justify_absence_eleve', 3);
            $table->text('info_justify_absence_eleve');
            $table->string('motif_absence_eleve', 4);
            $table->text('info_absence_eleve');
            $table->date('d_date_absence_eleve');
            $table->date('a_date_absence_eleve')->nullable();
            $table->time('d_heure_absence_eleve')->nullable();
            $table->time('a_heure_absence_eleve')->nullable();
            $table->integer('ra')->nullable();
            $table->string('saisie_absence_eleve', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absences_eleves');
    }
}

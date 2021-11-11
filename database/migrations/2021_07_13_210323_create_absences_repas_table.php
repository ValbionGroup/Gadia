<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsencesRepasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absences_repas', function (Blueprint $table) {
            $table->id();
            $table->date('date_repas');
            $table->string('id_groupe', 8);
            $table->string('eleve_id', 50);
            $table->string('pers_id', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absences_repas');
    }
}

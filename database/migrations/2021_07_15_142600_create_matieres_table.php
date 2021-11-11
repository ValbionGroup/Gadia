<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matieres', function (Blueprint $table) {
            $table->id();
            $table->string('code', 10);
            $table->string('color', 6);
            $table->string('libelle');
            $table->integer('discipline')->nullable()->default(null);
            $table->integer('nb_elv_reduit')->default(15);
            $table->integer('acc_perso')->default(0);
            $table->integer('theme_epi')->nullable()->default(null);
            $table->integer('spe')->default(0);
            $table->string('salle_pref')->nullable()->default(null);
            $table->string('siecle')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matieres');
    }
}

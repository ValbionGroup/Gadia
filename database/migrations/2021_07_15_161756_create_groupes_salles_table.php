<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupesSallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupes_salles', function (Blueprint $table) {
            $table->id('id_groupe');
            $table->string('nom_groupe', 100)->index();
            $table->integer('nb_salles')->default(2);
            $table->integer('cdi')->index()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groupes_salles');
    }
}

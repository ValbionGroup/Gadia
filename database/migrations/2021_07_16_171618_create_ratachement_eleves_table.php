<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatachementElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratachement_eleves', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('eleve_id')->index();
            $table->integer('classe_id')->index();
            $table->integer('groupe1')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ratachement_eleves');
    }
}

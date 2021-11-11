<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMefTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mef', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->string('formation');
            $table->integer('effectif')->default(0);
            $table->integer('niveau');
            $table->string('specialite', 5)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mef');
    }
}

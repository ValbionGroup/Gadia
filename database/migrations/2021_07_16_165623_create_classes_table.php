<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 50)->index();
            $table->integer('niveau');
            $table->integer('filiere_id')->nullable();
            $table->enum('notation', ['trim', 'seme', 'cont'])->default('trim');
            $table->enum('lsu', ['notes', 'echelle', 'objectifs'])->default('notes');
            $table->string('login_pp', 50)->index();
            $table->date('conseil')->nullable();
            $table->enum('bulletin', ['c2', 'c3', 'c4', 'sans', 'standard']);
            $table->enum('bilan_comp', ['c2', 'c3', 'c4', 'standard']);
            $table->enum('brevet', ['sg', 'sp'])->nullable()->default(null);
            $table->integer('cn')->default(1);
            $table->string('color', 6)->default('99ffff');
            $table->string('onde_id')->nullable();
            $table->integer('mef');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
}

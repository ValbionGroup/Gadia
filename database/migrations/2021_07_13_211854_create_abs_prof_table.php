<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsProfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abs_prof', function (Blueprint $table) {
            $table->id();
            $table->string('login_user', 50);
            $table->dateTime('date_debut');
            $table->dateTime('date_fin');
            $table->string('titre', 100);
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abs_prof');
    }
}

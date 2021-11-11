<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdressesListeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses_liste', function (Blueprint $table) {
            $table->id();
            $table->string('adresse1');
            $table->string('adresse2')->nullable();
            $table->string('cpostal');
            $table->string('ville');
            $table->string('depart')->nullable();
            $table->string('pays');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adresses_liste');
    }
}

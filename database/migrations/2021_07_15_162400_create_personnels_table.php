<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnels', function (Blueprint $table) {
            $table->id('id_personnel');
            $table->string('login', 50)->index();
            $table->string('nom');
            $table->string('prenom');
            $table->enum('civilite', ['Mme', 'M', 'Mlle'])->nullable();
            $table->string('fonction')->nullable()->default(null);
            $table->string('login_elv_charge', 50)->nullable()->default(null);
            $table->string('email');
            $table->string('tel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnels');
    }
}

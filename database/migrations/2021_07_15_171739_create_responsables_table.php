<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsables', function (Blueprint $table) {
            $table->id('id_responsable');
            $table->string('login', 50)->index();
            $table->string('nom', 100);
            $table->string('prenom', 100);
            $table->enum('civilite', ['M','Mme', 'Mlle']);
            $table->string('login_elv', 50)->index();
            $table->string('login_elv2', 50)->index()->nullable()->default(null);
            $table->string('login_elv3', 50)->index()->nullable()->default(null);
            $table->string('email');
            $table->string('tel');
            $table->integer('adr_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responsables');
    }
}

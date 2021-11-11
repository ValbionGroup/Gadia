<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSsoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sso', function (Blueprint $table) {
            $table->id();
            $table->string('login', 50)->index();
            $table->string('identifiant_ent')->nullable()->comment('Identifiant généré par Gadia et utilisé par les ENT');
            $table->string('identifiant_cas')->nullable()->comment("Identifie l'utilisateur dans la base de donnée du CAS");
            $table->string('code_ent')->nullable()->comment("Code permetant la première connection à l'ENT");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sso');
    }
}

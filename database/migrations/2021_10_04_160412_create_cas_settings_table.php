<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cas_settings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('auth_link');
            $table->string('validate_link');
            $table->enum('auth_mode', ['userid', 'gadiaid', 'casid']);
            $table->string('cas_subject')->default('subject');
            $table->string('cas_gadia')->nullable();
            $table->string('cas_name')->nullable();
            $table->string('cas_fname')->nullable();
            $table->string('cas_birthday')->nullable();
            $table->string('cas_post')->nullable();
            $table->string('cas_cat_attr')->nullable();
            $table->string('cas_cat_prof')->nullable();
            $table->string('cas_cat_student')->nullable();
            $table->string('cas_cat_resp')->nullable();
            $table->string('cas_cat_personnel')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cas_settings');
    }
}

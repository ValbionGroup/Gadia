<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('login', 50)->unique();
            $table->string('last_name', 50);
            $table->string('first_name', 50);
            $table->enum('gender', ['F', 'M']);
            $table->string('password');
            $table->string('email');
            $table->integer('show_email')->default(0);
            $table->string('code', 4);
            $table->string('status', 20)->index();
            $table->enum('state', ['actif', 'inactif'])->index();
            $table->integer('change_mdp')->default(1);
            $table->dateTime('date_disabled')->nullable();
            $table->smallInteger('alert_level')->default(0);
            $table->string('photo_path', 2048)->nullable();
            $table->rememberToken();
            $table->dateTime('last_connect')->nullable();
            $table->text('google2fa_secret')->nullable()->default(null);
            $table->enum('auth_mode', ['gadia','ldap','sso'])->default('gadia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

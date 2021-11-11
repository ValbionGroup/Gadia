<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFriendshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friendship', function (Blueprint $table) {
            $table->id();
            $table->string('login1', 50)->index();
            $table->string('login2', 50)->index();
            $table->string('acted_login', 50)->index();
            $table->enum('status', ['pending', 'confirmed', 'blocked']);
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
        Schema::dropIfExists('friendship');
    }
}

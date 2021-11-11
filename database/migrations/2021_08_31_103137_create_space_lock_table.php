<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateSpaceLockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('space_lock', function (Blueprint $table) {
            $table->id();
            $table->string('space');
            $table->integer('disabled');
        });

        DB::insert("insert into space_lock (space, disabled) values ('eleve', '0'), ('prof', '0'), ('viescolaire', '0'), ('parent', '0'), ('direction', '0')");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('space_lock');
    }
}

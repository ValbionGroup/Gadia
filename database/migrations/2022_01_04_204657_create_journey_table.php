<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateJourneyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journey', function (Blueprint $table) {
            $table->id();
            $table->string('day');
            $table->string('state')->nullable()->default(null);
        });

        DB::table('journey')->insert([
            ['day' => 'monday', 'state' => null],
            ['day' => 'tuesday', 'state' => null],
            ['day' => 'wednesday', 'state' => null],
            ['day' => 'thursday', 'state' => null],
            ['day' => 'friday', 'state' => null],
            ['day' => 'saturday', 'state' => null],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('journey');
    }
}

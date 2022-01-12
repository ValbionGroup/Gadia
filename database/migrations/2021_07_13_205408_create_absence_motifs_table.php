<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsenceMotifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absence_motifs', function (Blueprint $table) {
            $table->id('id');
            $table->char('code', 2);
            $table->string('definition', 255);
            $table->integer('jusitfy');
            $table->integer('re_admin');
            $table->integer('out');
            $table->integer('health');
            $table->integer('buletin');
            $table->integer('published');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absence_motifs');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->string('NAME', 100)->primary();
            $table->text('VALUE')->nullable();
        });

        DB::table('settings')->insert([
            ['NAME' => 'schoolName', 'VALUE' =>'A définir'],
            ['NAME' => 'schoolType', 'VALUE' =>null],
            ['NAME' => 'typeDim', 'VALUE' =>null],
            ['NAME' => 'adressCity', 'VALUE' =>null],
            ['NAME' => 'adressZip', 'VALUE' =>null],
            ['NAME' => 'adressState', 'VALUE' =>null],
            ['NAME' => 'adressDept', 'VALUE' =>null],
            ['NAME' => 'adressStreet', 'VALUE' =>null],
            ['NAME' => 'codeUai', 'VALUE' =>null],
            ['NAME' => 'licenseKey', 'VALUE' =>null],
            ['NAME' => 'version', 'VALUE' =>null],
            ['NAME' => 'year', 'VALUE' =>null],
            ['NAME' => 'logoEtab', 'VALUE' =>null],
            ['NAME' => 'cas', 'VALUE' => 'false'],
            ['NAME' => 'casBypass', 'VALUE' => 'false']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpokenLanguageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spoken_language', function (Blueprint $table) {
            $table->char('Language',2);
            $table->unsignedBigInteger('User');
        });

        Schema::table('spoken_language', function($table) {
            $table->foreign('Language')->references('languageAbbrevation')->on('language');
            $table->foreign('User')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spoken_language');
    }
}

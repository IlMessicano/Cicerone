<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityLanguages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_languages', function (Blueprint $table) {
            $table->string('Language');
            $table->foreign('Language')->references('languageAbbrevation')->on('language')->onDelete('cascade');
            $table->unsignedBigInteger('Activity');
            $table->foreign('Activity')->references('ActivityId')->on('activity')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activity_languages');
    }
}

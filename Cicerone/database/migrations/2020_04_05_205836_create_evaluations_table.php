<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('User');
            $table->foreign('User')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('Activity');
            $table->foreign('Activity')->references('ActivityId')->on('activity')->onDelete('cascade');
            $table->date('evaluationDate');
            $table->string('comment')->nullable();
            $table->integer('vote');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluations');
    }
}

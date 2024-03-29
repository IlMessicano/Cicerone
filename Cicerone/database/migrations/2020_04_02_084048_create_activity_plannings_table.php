<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityPlanningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_plannings', function (Blueprint $table) {
            $table->bigIncrements('planningId');
            $table->dateTime('startDate')->nullable();
            $table->dateTime('stopDate')->nullable();
            $table->integer('maxPartecipants')->nullable();
            $table->integer('numPartecipants')->default(0);
            $table->float('cost')->default(0);
            $table->string('notes')->nullable();
            $table->unsignedBigInteger('activity_id');
            $table->foreign('activity_id')->references('ActivityId')->on('activity')->onDelete('cascade');;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activity_plannings');
    }
}

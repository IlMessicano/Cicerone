<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity__enrollments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('User');
            $table->foreign('User')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('PlanningId');
            $table->foreign('PlanningId')->references('planningId')->on('activity_plannings')->onDelete('cascade');
            $table->date('enrollmentDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activity__enrollments');
    }
}

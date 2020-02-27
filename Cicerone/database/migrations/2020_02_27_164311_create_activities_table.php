<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->bigIncrements('ActivityId');
            $table->string('nameActivity');
            $table->string('imgActivity');
            $table->text('description');
            $table->integer('user_id');
            $table->integer('upVote')->default(0);
            $table->integer('downVote')->default(0);
            $table->float('latCoord')->default(0);
            $table->float('longCoord')->default(0);
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
        Schema::dropIfExists('activities');
    }
}

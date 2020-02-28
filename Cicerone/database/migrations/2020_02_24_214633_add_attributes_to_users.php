<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAttributesToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname');
            $table->date('birthDate');
            $table->char('gender');
            $table->string('nationality');
            $table->string('phone');
            $table->string('imgProfile')->nullable();;
            $table->string('biography')->nullable();;
            $table->float('balance')->default(0.0);
            $table->integer('upVote')->default(0);
            $table->integer('downVote')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('surname');
            $table->dropColumn('dataNascita');
            $table->dropColumn('birthDate');
            $table->dropColumn('sex');
            $table->dropColumn('nationality');
            $table->dropColumn('imgProfile');
            $table->dropColumn('biography');
            $table->dropColumn('balance');
            $table->dropColumn('upVote');
            $table->dropColumn('downVote');


        });
    }
}

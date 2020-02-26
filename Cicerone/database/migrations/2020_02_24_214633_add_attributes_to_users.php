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
            $table->string('cognome');
            $table->date('dataNascita');
            $table->char('sesso');
            $table->string('nazionalita');
            $table->string('cittaResidenza')->nullable();;
            $table->string('nazioneResidenza')->nullable();;
            $table->string('telefono');
            $table->string('imgProfilo')->nullable();;
            $table->string('biografia')->nullable();;
            $table->float('saldo')->default(0.0);
            $table->integer('votiPos')->default(0);
            $table->integer('votiNeg')->default(0);
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
            $table->dropColumn('cognome');
            $table->dropColumn('dataNascita');
            $table->dropColumn('sesso');
            $table->dropColumn('nazionalita');
            $table->dropColumn('cittaResidenza');
            $table->dropColumn('nazioneResidenza');
            $table->dropColumn('telefono');
            $table->dropColumn('imgProfilo');
            $table->dropColumn('biografia');
            $table->dropColumn('saldo');
            $table->dropColumn('votiPos');
            $table->dropColumn('VotiNeg');


        });
    }
}

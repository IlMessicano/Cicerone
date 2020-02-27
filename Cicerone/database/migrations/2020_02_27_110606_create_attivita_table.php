<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttivitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attivita', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomeAttivita');
            $table->string('imgAttivita');
            $table->text('descrizione');
            $table->integer('cicerone');
            $table->integer('votiPos')->default(0);
            $table->integer('votiNeg')->default(0);
            $table->float('coordLat')->default(0);
            $table->float('coordLong')->default(0);
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
        Schema::dropIfExists('attivita');
    }
}

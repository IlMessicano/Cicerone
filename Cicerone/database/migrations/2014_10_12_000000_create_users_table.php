<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Utente', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('nome');
            $table->string('cognome');
            $table->string('password');
            $table->date('dataNascita');
            $table->char('sesso');
            $table->string('nazionalità');
            $table->string('cittàResidenza')->nullable();;
            $table->string('nazioneResidenza')->nullable();;
            $table->integer('telefono');
            $table->string('imgProfilo')->nullable();;
            $table->string('biografia')->nullable();;
            $table->float('saldo');
            $table->integer('votiPos');
            $table->integer('VotiNeg');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

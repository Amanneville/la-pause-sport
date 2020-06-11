<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_auteur');
            $table->unsignedBigInteger('id_participant');
            $table->string('sport');
            $table->integer('niveau');
            $table->date('date');
            $table->time('heure_debut');
            $table->time('heure_fin');
            $table->string('adresse');
            $table->integer('code_postal');
            $table->string('ville');
            $table->integer('nbr_participants');
            $table->integer('prix');
            $table->integer('note_session');
            $table->integer('tchat_id');
            $table->timestamps();

            $table->foreign('id_auteur')->references('id')->on('users');
            $table->foreign('id_participant')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessions');
    }
}

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
            $table->bigInteger('id_auteur');
            //$table->foreignId('id_sport')->constrained('sports')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_sport');
            $table->time('heure_debut');
            $table->time('heure_fin');
            $table->date('date');
            $table->string('adresse');
            $table->integer('code_postal');
            $table->string('ville');
            $table->integer('niveau');
            $table->integer('nb_max_participants');
            $table->integer('prix');
            $table->integer('note');
            $table->integer('chat_id');
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
        Schema::dropIfExists('sessions');
    }
}

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
            $table->unsignedBigInteger('id_auteur')->nullable();
            $table->foreignId('id_sport')->nullable()->constrained('sports')->onUpdate('cascade')->onDelete('cascade');
            $table->time('heure_debut');
            $table->time('heure_fin');
            $table->date('date');
            $table->string('adresse');
            $table->string('ville');
            $table->integer('code_postal');
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

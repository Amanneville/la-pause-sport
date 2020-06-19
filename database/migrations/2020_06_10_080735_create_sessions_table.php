<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     * Table destinée a enregistrer les informations nécéssaires à la création
     * d'une session par les users ayant le rôle de coach.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('auteur_id')->nullable();
            $table->foreignId('sport_id')->nullable()->constrained('sports')->onUpdate('cascade')->onDelete('cascade');
            $table->time('heure_debut');
            $table->time('heure_fin');
            $table->date('date');
            $table->string('adresse');
            $table->string('ville');
            $table->string('code_postal');
            $table->integer('niveau');
            $table->integer('nb_max_participants');
            $table->integer('prix');
            $table->integer('note')->nullable();
            $table->integer('chat_id')->nullable();
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

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
            $table->bigInteger('id_auteur')->nullable();
            $table->foreignId('id_sport')->nullable()->constrained('sports')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->time('heure_debut')->nullable();
            $table->time('heure_fin')->nullable();
            $table->date('date')->nullable();
            $table->string('adresse')->nullable();
            $table->integer('code_postal')->nullable();
            $table->string('ville')->nullable();
            $table->integer('niveau')->nullable();
            $table->integer('nb_max_participants')->nullable();
            $table->integer('prix')->nullable();
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

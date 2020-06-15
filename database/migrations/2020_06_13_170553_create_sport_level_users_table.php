<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSportLevelUsersTable extends Migration
{
    /**
     * Run the migrations.
     * Table destinée à créer une association : id_user/id_sport/niveau actuel dans le sport.
     * @return void
     */
    public function up()
    {
        Schema::create('level_sport_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users');
            $table->foreignId('id_sport')->constrained('sports');
            $table->integer('user_current_level')->nullable();
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
        Schema::dropIfExists('sport_level_users');
    }
}

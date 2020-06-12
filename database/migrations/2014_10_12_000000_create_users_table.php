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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->string('avatar')->nullable();
            $table->integer('age')->nullable();
            $table->string('adresse')->nullable();
            $table->string('code_postal')->nullable();
            $table->integer('sport1')->nullable();
            $table->integer('niveau1')->nullable();
            $table->integer('exp1')->nullable();
            $table->integer('sport2')->nullable();
            $table->integer('niveau2')->nullable();
            $table->integer('exp2')->nullable();
            $table->integer('sport3')->nullable();
            $table->integer('niveau3')->nullable();
            $table->integer('exp3')->nullable();
            $table->integer('reputation_coach')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

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

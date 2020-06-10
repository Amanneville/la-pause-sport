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
            $table->string('lastname');
            $table->integer('age');
            $table->string('adresse');
            $table->integer('code_postal');
            $table->integer('sport1');
            $table->integer('niveau1');
            $table->integer('exp1');
            $table->integer('sport2');
            $table->integer('niveau2');
            $table->integer('exp2');
            $table->integer('sport3');
            $table->integer('niveau3');
            $table->integer('exp3');
            $table->integer('reputation_coach')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('ip_address');
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

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
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();

            $table->date('naissance');
            $table->string('adresse');
            $table->integer('code_postal');
            $table->string('ville');
            $table->string('adr_IP');

<<<<<<< HEAD
            $table->unsignedBigInteger('role_id')->unique();
=======
            $table->integer('role');
>>>>>>> 269cebc8e9095e01fa3b32af6b136acafd32ab40
            $table->integer('note');

            $table->string('sport1');
            $table->string('niveau1')->nullable();
            $table->string('experience1')->nullable();

            $table->string('sport2');
            $table->string('niveau2')->nullable();
            $table->string('experience2')->nullable();

            $table->string('sport3');
            $table->string('niveau3')->nullable();
            $table->string('experience3')->nullable();

            $table->timestamps();
<<<<<<< HEAD


=======
>>>>>>> 269cebc8e9095e01fa3b32af6b136acafd32ab40
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

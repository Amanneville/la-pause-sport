<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD:database/migrations/2020_06_09_200543_create_roles_table.php
            $table->string('admin');
            $table->string('coach');
            $table->string('eleve');
=======
            $table->string('name');
>>>>>>> aurel:database/migrations/2020_06_08_113849_create_roles_table.php
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
        Schema::dropIfExists('roles');
    }
}

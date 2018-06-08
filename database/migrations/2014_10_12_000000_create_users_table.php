<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_95319', function (Blueprint $table) {
            //Unique
            $table->increments('id');

            //others
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('password');

            //Record Metadata fields
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
        Schema::dropIfExists('users_95319');
    }
}

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
            $table->string('userName');
            $table->string('email')->unique();
            $table->string('password');
            $table->date('birthday');
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->integer('height');
            $table->integer('weight');
            $table->enum('objectif', ['Lose Weight', 'Gain Weight']);
            $table->float('calories_needed' , 8,2);
            $table->rememberToken(); // Add this line to include remember_token column
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

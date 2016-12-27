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
        Schema::create('users', function (Blueprint $table) {

            $table->increments('id')->unsigned()->unique();
//            $table->integer('under');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('locale')->default('el');
            $table->string('remember_token')->nullable();

            //Timestamps
            $table->timestamps();

            //Foreign Keys
//            $table->foreign('under')->references('id')->on('users');
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

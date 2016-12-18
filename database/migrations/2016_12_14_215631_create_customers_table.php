<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {

            $table->increments('id')->unique();
            $table->integer('u_id')->unsigned();
            $table->string('name');
            $table->string('email');
            $table->string('phone_no');
            $table->string('gender');
            $table->date('b_day');
            $table->boolean('vip')->default(0);
            $table->date('last_visited')->nullable();
            $table->timestamps();

            $table->foreign('u_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}

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
            $table->increments('id');

            $table->string('login')->default('0'); // login 1 ; logout 0
            $table->string('password');

            // Other fields
            $table->string('name');
            $table->string('surname');
            $table->string('email')->unique();
            $table->string('code')->unique();
            $table->string('country');
            $table->string('city');
            $table->string('mobile');
            $table->string('dni')->unique();;

            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles');
            $table->rememberToken();
            $table->timestamps();

            $table->softDeletes();
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

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('users', function($table)
        {
            $table->increments('id');            
            $table->string('name');
            $table->string('lastname');
            $table->integer('confirm');
            $table->string('email');
            $table->string('password');            
            $table->timestamps();
            $table->datetime("deleted_at");
            $table->integer('userRoleId')->unsigned();            
        });

        Schema::table('users', function($table)
        {
            
            $table->foreign('userRoleId')->references('id')->on('user_roles');
        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}

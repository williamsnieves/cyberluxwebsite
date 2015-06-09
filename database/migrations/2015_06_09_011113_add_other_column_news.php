<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOtherColumnNews extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('news', function(Blueprint $table)
		{
			//
			$table->softDeletes();
			$table->integer('typenewsId')->unsigned(); 
			$table->foreign('typenewsId')->references('id')->on('type_news');
			$table->integer('usersId')->unsigned(); 
			$table->foreign('usersId')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('news', function(Blueprint $table)
		{
			//
		});
	}

}

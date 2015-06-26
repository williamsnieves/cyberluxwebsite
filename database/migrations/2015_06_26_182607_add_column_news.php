<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnNews extends Migration {

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
			$table->integer('type_news_id')->unsigned()->nullable(); 
			$table->foreign('type_news_id')->references('id')->on('type_news')->onDelete('cascade');
			$table->integer('galleries_id')->unsigned()->nullable(); 
			$table->foreign('galleries_id')->references('id')->on('galleries')->onDelete('cascade');
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

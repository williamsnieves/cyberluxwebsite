<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddConstraintGalleries extends Migration {

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

			$table->integer('galleries_id')->unsigned();
           	$table->foreign('galleries_id')->references('id')->on('galleries');
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

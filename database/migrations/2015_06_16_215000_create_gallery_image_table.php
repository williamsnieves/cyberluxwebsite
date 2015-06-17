<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryImageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gallery_image', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('gallery_id')->unsigned()->index();
            $table->foreign('gallery_id')->references('id')->on('galleries');
            $table->integer('image_id')->unsigned()->index();
            $table->foreign('image_id')->references('id')->on('images');
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
		Schema::drop('gallery_image');
	}

}

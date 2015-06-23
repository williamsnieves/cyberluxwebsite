<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomImageGallery extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('custom_image_gallery', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('gallery_id')->unsigned()->index();
            $table->foreign('gallery_id')->references('id')->on('galleries')->onDelete('cascade');
            $table->integer('custom_image_id')->unsigned()->index();
            $table->foreign('custom_image_id')->references('id')->on('images')->onDelete('cascade');
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
		Schema::drop('custom_image_gallery');
	}

}

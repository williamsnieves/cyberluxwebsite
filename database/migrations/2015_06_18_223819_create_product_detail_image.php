<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductDetailImage extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_detail_image', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('product_detail_id')->unsigned()->index();
            $table->foreign('product_detail_id')->references('id')->on('product_details');
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
		Schema::drop('product_detail_image');
	}

}

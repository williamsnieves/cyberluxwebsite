<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomImageProductDetail extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('custom_image_product_detail', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('product_detail_id')->unsigned()->index();
            $table->foreign('product_detail_id')->references('id')->on('product_details')->onDelete('cascade');
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
		Schema::drop('custom_image_product_detail');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('features');
			$table->string('specialfeatures');
			$table->integer('products_id')->unsigned();
            $table->fore qign('products_id')->references('id')->on('products')->onDelete('cascade');
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
		Schema::drop('product_details');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductPricesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_prices', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('price');
			$table->string('tax');
			$table->integer('products_id')->unsigned();
            $table->foreign('products_id')->references('id')->on('products');
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
		Schema::drop('product_prices');
	}

}

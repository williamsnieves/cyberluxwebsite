<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('cod_product');
			$table->longText('description');
			$table->integer('categories_id')->unsigned();
            $table->foreign('categories_id')->references('id')->on('categories');
            $table->integer('images_id')->unsigned();
           	$table->foreign('images_id')->references('id')->on('images');
            $table->unique('cod_product');
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
		Schema::drop('products');
	}

}

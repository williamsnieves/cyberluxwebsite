<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shipping_addresses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('addresses_id')->unsigned();
            $table->foreign('addresses_id')->references('id')->on('addresses')->onDelete('cascade');
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
		Schema::drop('shipping_addresses');
	}

}

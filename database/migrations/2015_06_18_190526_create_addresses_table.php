<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('addresses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('address');           
            $table->string('zipcode');
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('countries_id')->unsigned();
            $table->foreign('countries_id')->references('id')->on('countries')->onDelete('cascade');
            $table->integer('cities_id')->unsigned();
            $table->foreign('cities_id')->references('id')->on('cities')->onDelete('cascade');
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
		Schema::drop('addresses');
	}

}

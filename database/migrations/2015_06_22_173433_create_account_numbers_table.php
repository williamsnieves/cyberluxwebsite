<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountNumbersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('account_numbers', function(Blueprint $table)
		{
			$table->increments('id');			
			$table->integer('number');
			$table->string('bank');
			$table->string('type');
			$table->string('consideration');
			$table->integer('payment_methods_id')->unsigned();
            $table->foreign('payment_methods_id')->references('id')->on('payment_methods')->onDelete('cascade');
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
		Schema::drop('account_numbers');
	}

}

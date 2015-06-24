<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentHistoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payment_histories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('infopayment');
			$table->integer('statuspayment');
			$table->integer('payment_profiles_id')->unsigned();
            $table->foreign('payment_profiles_id')->references('id')->on('payment_profiles')->onDelete('cascade');
			$table->softDeletes();
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
		Schema::drop('payment_histories');
	}

}

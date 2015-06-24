<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryPurchasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('history_purchases', function(Blueprint $table)		{
			
			$table->increments('id');
			$table->integer('status');
			$table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');            
            $table->integer('purchases_id')->unsigned();
            $table->foreign('purchases_id')->references('id')->on('purchases')->onDelete('cascade');
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
		Schema::drop('history_purchases');
	}

}

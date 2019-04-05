<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogHotelClicksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('log_hotel_clicks', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->timestamps();
			$table->integer('hotel_id')->unsigned()->index('log_hotel_clicks_hotel_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('log_hotel_clicks');
	}

}

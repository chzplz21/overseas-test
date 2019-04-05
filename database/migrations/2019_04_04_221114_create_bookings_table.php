<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBookingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bookings', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->integer('user_id')->unsigned()->index('bookings_user_id_foreign');
			$table->integer('hotel_id');
			$table->integer('room_id')->unsigned()->index('bookings_room_id_foreign');
			$table->string('date');
			$table->integer('total');
			$table->string('creditCard');
			$table->string('creditCardNumber');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bookings');
	}

}

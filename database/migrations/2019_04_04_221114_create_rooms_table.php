<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoomsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rooms', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('name', 191);
			$table->integer('hotel_id')->unsigned()->index('rooms_hotel_id_foreign');
			$table->integer('price');
			$table->decimal('taxes', 10);
			$table->integer('fees')->nullable();
			$table->integer('people');
			$table->string('date');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rooms');
	}

}

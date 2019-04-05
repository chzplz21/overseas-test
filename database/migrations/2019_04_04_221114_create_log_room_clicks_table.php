<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogRoomClicksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('log_room_clicks', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->timestamps();
			$table->integer('room_id')->unsigned()->index('log_room_clicks_room_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('log_room_clicks');
	}

}

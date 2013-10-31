<?php

use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('staff', function($table)
		{
		    $table->increments('staff_id');
		    $table->string('first_name');
		    $table->string('last_name');
		    $table->string('email_address');
		    $table->string('position');
		    $table->boolean('site_enabled');
		    $table->boolean('site_id');
		    $table->string('site_url'); // if site is district-hosted, we will detect this

			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('staff');
	}

}
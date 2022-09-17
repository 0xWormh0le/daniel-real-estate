<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->nullable();
			$table->integer('theme_id')->nullable();
			$table->string('location')->nullable();
			$table->string('company')->nullable();
			$table->string('address')->nullable();
			$table->string('city')->nullable();
			$table->string('avatar')->nullable();
			$table->string('avatar_status')->nullable();
			$table->string('user_profile_bg')->nullable();
			$table->timestamps();
			$table->string('state')->nullable();
			$table->string('zipcode')->nullable();
			$table->string('country')->nullable();
			$table->string('billing_address')->nullable();
			$table->string('billing_city')->nullable();
			$table->string('billing_state')->nullable();
			$table->string('billing_zipcode')->nullable();
			$table->string('billing_country')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('profiles');
	}

}

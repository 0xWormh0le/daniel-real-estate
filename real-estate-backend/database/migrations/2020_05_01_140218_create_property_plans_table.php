<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropertyPlansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('property_plans', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('property_id')->nullable();
			$table->string('name')->nullable();
			$table->string('description')->nullable();
			$table->integer('area')->nullable();
			$table->integer('rooms')->nullable();
			$table->integer('baths')->nullable();
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
		Schema::drop('property_plans');
	}

}
